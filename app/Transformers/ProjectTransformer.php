<?php

namespace App\Transformers;

use App\Models\Project;
use League\Fractal\TransformerAbstract;

class ProjectTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Project $project)
    {
        $attributes = $project->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        $imageTitle = storage_path('app/public/'.$project->image);
        $imageTitleNoExtension = basename($imageTitle, '.png');
        if (file_exists(storage_path('app/public/projects/'.$imageTitleNoExtension.'-title.png'))) {
            $attributes['image-title'] = url('storage').'/'.$imageTitleNoExtension.'-title.png';
        }

        if (null == $project->image) {
            $attributes['image'] = url('storage').'/'.'projects/no-image.png';
        }

        if (null != $project->image) {
            $attributes['image'] = config('app.url').'/'.$project->image;
        }

        if (null != $project->font) {
            $attributes['font'] = config('app.url').'/'.$project->font;
        }

        return $attributes;
    }

    public function includeSkills(Project $project)
    {
        return $this->collection($project->skills, new SkillTransformer());
    }

    public function includeProjectsMembers(Project $project)
    {
        return $this->item($project->projectsMembers, new ProjectMemberTransformer());
    }
}

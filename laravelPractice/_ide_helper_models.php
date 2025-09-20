<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @method bool can(string $ability, mixed $arguments = [])
 * @method bool cannot(string $ability, mixed $arguments = [])
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\employer> $employers
 * @property-read int|null $employers_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\present_job> $jobs
 * @property-read int|null $jobs_count
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\employerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|employer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|employer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|employer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|employer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|employer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|employer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|employer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|employer whereUserId($value)
 */
	class employer extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $present_job_id
 * @property int $tag_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\job_tagFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|job_tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|job_tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|job_tag query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|job_tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|job_tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|job_tag wherePresentJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|job_tag whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|job_tag whereUpdatedAt($value)
 */
	class job_tag extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $employer_id
 * @property string $title
 * @property string $salary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\employer $employer
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\tag> $tags
 * @property-read int|null $tags_count
 * @method static \Database\Factories\present_jobFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|present_job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|present_job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|present_job query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|present_job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|present_job whereEmployerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|present_job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|present_job whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|present_job whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|present_job whereUpdatedAt($value)
 */
	class present_job extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\present_job> $jobs
 * @property-read int|null $jobs_count
 * @method static \Database\Factories\tagFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|tag query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|tag whereUpdatedAt($value)
 */
	class tag extends \Eloquent {}
}


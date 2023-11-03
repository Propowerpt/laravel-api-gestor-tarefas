<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Prioridade
 *
 * @property int $id
 * @property string $nome
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Prioridade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prioridade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prioridade query()
 * @method static \Illuminate\Database\Eloquent\Builder|Prioridade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prioridade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prioridade whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prioridade whereUpdatedAt($value)
 */
	class Prioridade extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tarefa
 *
 * @property int $id
 * @property string $titulo
 * @property string|null $descricao
 * @property int $completa
 * @property int|null $prioridade_id
 * @property string|null $data_fim
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa whereCompleta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa whereDataFim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa wherePrioridadeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa whereUpdatedAt($value)
 */
	class Tarefa extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TarefaUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $tarefa_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TarefaUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TarefaUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TarefaUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|TarefaUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TarefaUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TarefaUser whereTarefaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TarefaUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TarefaUser whereUserId($value)
 */
	class TarefaUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}


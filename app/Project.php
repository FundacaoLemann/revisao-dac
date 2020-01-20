<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

class Project extends Model
{

    protected $fillable = [
        'email_principal',
        'projeto_nome',
        'projeto_rede',
        'projeto_descricao',
        'projeto_publico',
        'projeto_publico_outro',
        'departamento_nome',
        'departamento_rua',
        'departamento_numero',
        'departamento_compl',
        'departamento_bairro',
        'departamento_cidade',
        'departamento_estado',
        'departamento_cep',
        'departamento_regiao',
        'departamento_sobre',
        'departamento_apoio',
        'departamento_links',
        'departamento_inicio_mes',
        'departamento_inicio_ano',
        'escola_nome',
        'escola_rua',
        'escola_numero',
        'escola_compl',
        'escola_bairro',
        'escola_cidade',
        'escola_estado',
        'escola_cep',
        'escola_regiao',
        'escola_equipe',
        'escola_modalidade',
        'escola_sobre',
        'escola_links',
        'escola_inicio_mes',
        'escola_inicio_ano',
        'parceiros',
        'projeto_espacos',
        'projeto_espacos_outro',
        'projeto_comunidade',
        'projeto_comunidade_descricao_publico',
        'projeto_quantidade_pessoas',
        'projeto_atividades',
        'projeto_atividades_outro',
        'projeto_funcionamento',
        'projeto_habilidades',
        'projeto_avaliacao',
        'projeto_testado',
        'projeto_avaliacao_resultado',
        'projeto_link',
        'projeto_video',
        'projeto_justificativa',
        'projeto_ajuda',
        'projeto_mais_candidatos',
        'projeto_indicacao',
        'projeto_indicacao_outro',
        'projeto_info_extra',
        'projeto_doc',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('valido', function (Builder $builder) {
            $builder->where('valido', '=',  1);
        });
    }

    public function reviewers()
    {
        return $this->belongsToMany('App\Reviewer');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function candidates()
    {
        return $this->hasMany('App\Candidate');
    }

    public function partners()
    {
        return $this->hasMany('App\Partner');
    }

    public function getReviewersListAttribute()
    {
        return Arr::pluck($this->reviewers->toArray(), 'name');
    }

    public function getProjetoPublicoAttribute($value)
    {
        $publicoParsed = [];

        if($value) {
            $publicoLabels = config('constants.publico_alvo');

            $publicoCollect = collect(explode(',', $value));

            $publicoParsed = $publicoCollect->map(function ($item) use ($publicoLabels) {
                return $publicoLabels[trim($item)];
            });
        }

        return $publicoParsed;
    }

    public function getStatusAttribute()
    {

        $reviewers = $this->reviewers()->count();

        if($reviewers == 0)
            return 'aguardando_atribuicao';

        $reviews = $this->reviews()->count();

        if($reviewers == $reviews) {
            return 'revisado';
        } else {
            return 'aguardando_revisao';
        }

        return '-';

    }

    public function addReview($data)
    {
        return $this->reviews()->create($data);
    }

}

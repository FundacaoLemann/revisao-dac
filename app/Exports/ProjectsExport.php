<?php

namespace App\Exports;

use App\Project;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProjectsExport implements FromArray, WithHeadings
{

    public function headings(): array
    {
        return [
            'Nome do projeto',
            'Região do Brasil',
            'Estado',
            'O projeto será implementado em qual rede de ensino?',
            'Nome do primeiro candidato',
            'E-mail principal para contato',
            'Nome Revisor(a)',
            'Relevância',
            'Alinhamento com AC',
            'Viabilidade',
            'Inovação',
            'Total',
            'Recomenda este projeto como finalista?',
            'Comentários para candidatos',
            'Comentários para comite avaliador',
            'Nome Revisor(a)',
            'Relevância',
            'Alinhamento com AC',
            'Viabilidade',
            'Inovação',
            'Total',
            'Recomenda este projeto como finalista?',
            'Comentários para candidatos',
            'Comentários para comite avaliador',
            'Nome Revisor(a)',
            'Relevância',
            'Alinhamento com AC',
            'Viabilidade',
            'Inovação',
            'Total',
            'Recomenda este projeto como finalista?',
            'Comentários para candidatos',
            'Comentários para comite avaliador',
        ];
    }

    public function array(): array
    {
        $projects = Project::
            select(['id', 'projeto_nome', 'departamento_regiao', 'departamento_estado', 'projeto_rede'])
            ->with('candidates')
            ->with('reviews')
            ->get();

        $data = [];

        $i = 0;

        foreach($projects as $project) {

            $data[$i] = [
                $project->projeto_nome,
                $project->departamento_regiao,
                $project->departamento_estado,
                $project->projeto_rede,
            ];

            if( isset($project->candidates[0]) ) {
                $data[$i][] = $project->candidates[0]->nome;
                $data[$i][] = $project->candidates[0]->email;
            }

            if( $project->reviews->isNotEmpty() ) {

                foreach($project->reviews as $review) {

                    $reviewer = $review->reviewer()->first();

                    $data[$i][] = $reviewer->name;
                    $data[$i][] = (string) $review->relevance;
                    $data[$i][] = (string) $review->alignment;
                    $data[$i][] = (string) $review->viability;
                    $data[$i][] = (string) $review->innovation;
                    $data[$i][] = (string) $review->score_sum;
                    $data[$i][] = ($review->recommended) ? 'Sim' : 'Não';
                    $data[$i][] = $review->cadidates_comments;
                    $data[$i][] = $review->committee_comments;

                }

            }

            $i++;

        }

        return $data;

    }
}

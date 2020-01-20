<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Partner;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->all();

        $fields['projeto_atividades'] = isset($fields['projeto_atividades']) && is_array($fields['projeto_atividades']) ? implode(', ', $fields['projeto_atividades']) : '';
        $fields['projeto_publico'] = isset($fields['projeto_publico']) && is_array($fields['projeto_publico']) ? implode(', ', $fields['projeto_publico']) : '';
        $fields['projeto_espacos'] = isset($fields['projeto_espacos']) && is_array($fields['projeto_espacos']) ? implode(', ', $fields['projeto_espacos']) : '';
        $fields['projeto_indicacao'] = isset($fields['projeto_indicacao']) && is_array($fields['projeto_indicacao']) ? implode(', ', $fields['projeto_indicacao']) : '';

        if($request->hasFile('projeto_doc') && $request->file('projeto_doc')->isValid()) {
            $fields['projeto_doc'] = $request->projeto_doc->store('docs');
        }

        //salvar o projeto
        $project = new Project($fields);
        $project->save();

        $partnerFields = [
            'parceiros_nome' => 'nome',
            'parceiros_link' => 'link',
            'parceiros_tipo' => 'tipo',
            'parceiros_inicio_mes' => 'inicio_mes',
            'parceiros_inicio_ano' => 'inicio_ano',
        ];

        //salva dados de parceiros
        if($fields['parceiros'] == 'sim') {
            if(is_array($fields['parceiros_nome'])) {
                foreach($fields['parceiros_nome'] as $key => $nome) {
                    $partnerFields = [
                        'project_id' => $project->id,
                        'nome' => $fields['parceiros_nome'][$key],
                        'link' => $fields['parceiros_link'][$key],
                        'tipo' => $fields['parceiros_tipo'][$key],
                        'inicio_mes' => $fields['parceiros_inicio_mes'][$key],
                        'inicio_ano' => $fields['parceiros_inicio_ano'][$key],
                    ];
                    $partner = new Partner($partnerFields);
                    $partner->save();
                }
            }
        }

        $candidatosOpcoes = [
            'candidato' => 'candidato_nome',
            'candidato2' => 'candidato2_nome',
            'candidato3' => 'candidato3_nome',
            'candidato4' => 'candidato4_nome'
        ];

        foreach($candidatosOpcoes as $key => $candidato) {
            if(isset($fields[$candidato])) {
                $candidateFields = [
                    'project_id' => $project->id,
                    'nome' => $fields["{$key}_nome"],
                    'telefone' => $fields["{$key}_telefone"],
                    'email' => $fields["{$key}_email"],
                    'rua' => $fields["{$key}_rua"],
                    'numero' => $fields["{$key}_numero"],
                    'compl' => $fields["{$key}_compl"],
                    'bairro' => $fields["{$key}_bairro"],
                    'cidade' => $fields["{$key}_cidade"],
                    'estado' => $fields["{$key}_estado"],
                    'cep' => $fields["{$key}_cep"],
                    'regiao' => $fields["{$key}_regiao"],
                    'link' => $fields["{$key}_link"],
                    'usuario' => $fields["{$key}_usuario"],
                    'instituicao' => $fields["{$key}_instituicao"],
                    'cargo' => $fields["{$key}_cargo"],
                    'papel' => $fields["{$key}_papel"],
                    'disponibilidade' => $fields["{$key}_disponibilidade"],
                    'escolaridade' => $fields["{$key}_escolaridade"],
                    'curso' => $fields["{$key}_curso"],
                    'escola_recente' => $fields["{$key}_escola_recente"],
                    'ano_conclusao' => $fields["{$key}_ano_conclusao"],
                    'bio' => $fields["{$key}_bio"],
                    'retrosp' => $fields["{$key}_retrosp"],
                    'fellow' => $fields["{$key}_fellow"],
                ];

                $candidate = new Candidate($candidateFields);
                $candidate->save();
            }
        }

        return response("Dados salvos com sucesso.");
    }

}

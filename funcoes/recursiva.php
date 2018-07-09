<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            // Inicio Director Comercial
            array(
                'nome_cargo' => 'Director Comercial',
                'subordinados' => array(
                    // Inicio Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    // Fim Gerente de Vendas
                )
            ),
            // Fim Director Comercial
            // Inicio Director Financeiro
            array(
                'nome_cargo' => 'Director Financeiro',
                'subordinados' => array(
                    // Inicio Gestor de Contas
                    array(
                        'nome_cargo' => 'Gestor de Contas',
                        'subordinados' => array(
                            // Inicio Supervisor de Contas
                            array(
                                'nome_cargo' => 'Supervisor de Contas'
                            )
                            // Fim Supervisor de Contas
                        )
                    ),
                    // Fim Gestor de Contas
                    // Inicio Gestor de Compras
                    array(
                        'nome_cargo' => 'Gestor de Compras',
                        'subordinados' => array(
                            // Inicio Gestor de Economato
                            array(
                                'nome_cargo' => 'Gestor de Economato',
                                'subordinados' => array(
                                    array(
                                        'nome_cargo' => 'Funcionário'
                                    )
                                )
                            )
                            // Fim Gestor de Economato
                        )
                    )
                    // Fim Gestor de Compras
                )
            )
            // Fim Director Financeiro
        )
    )
);

function exibe($cargos)
{
    $html = '<ul>';

    foreach ($cargos as $cargo):

        $html .= '<li>';

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0):
            $html .= exibe($cargo['subordinados']);
        endif;

        $html .= '</li>';

    endforeach;

    $html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);
?>
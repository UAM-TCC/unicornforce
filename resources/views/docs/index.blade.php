@extends('layouts.docslayout')
@section('content')

<style>
    .text-docs {
        text-align: left;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 18px;
    }
</style>

<br>

<h3 class="mt-5">Como são feitos nossos testes</h3>

<h5 class="d-flex justify-content-start mt-5">
    Como é feito a Avaliação de Desempenho ?
</h5>
<p class="font-weight-bold text-docs">
    Com a intenção de garantir a gestão da qualidade dos dispositivos utilizados durante o desenvolvimento do projeto, foi criado um protocolo de testes, que a partir da avaliação do desempenho
    do dispositivo e de suas condições físicas, tem como produto final um Selo de Qualidade utilizado para categorizar as capacidades do aparelho.
    A avaliação final do dispositivo é composta de três resultados: Resultado de Performance (RP), Resultado de Compatibilidade (RC) e Resultado de Condições Físicas (RCF).
    A partir destes resultados, são gerados o Resultado Final (RF) e o Selo de Qualidade (SQ).
</p>


<h5 class="d-flex justify-content-start mt-5">
    Como é feito Avaliação de Performance ?
</h5>
<p class="font-weight-bold text-docs">
    O RP é a primeira análise efetuada no dispositivo, e consiste na execução de uma série de softwares de teste para avaliação de performance, gerando pontuações de valores numéricos maiores que zero.
    Para a garantia da fidelidade dos resultados, foi utilizado o UnixBench, que disponibiliza um grande conjunto de testes, e todos os testes foram feitos com os dispositivos conectados à uma fonte
    de alimentação, com 100% de bateria. Para sua instalação e execução, foram utilizados os passos apresentados no Apêndice B.

</p>

<h5 class="d-flex justify-content-start mt-5">
    Como é feito o teste de Compatibilidade ?
</h5>
<p class="font-weight-bold text-docs">
    Para garantir a viabilidade da utilização do dispositivo por um programador, foi analisada a compatibilidade com algumas ferramentas utilizadas no desenvolvimento de software. A escolha das ferramentas analisadas foi feita utilizando o questionário para programadores organizado pelo Stack Overflow (Stack Overflow. 2020).
    Através da análise das linguagens mais utilizadas por programadores profissionais, as linguagens Python, Java, C# e PHP foram escolhidas. Em seguida, através da análise das frameworks mais utilizadas por programadores profissionais, as frameworks Node.js e .NET Core foram escolhidas. Por último, através da análise dos bancos de dados mais utilizados por programadores profissionais, o banco de dados MySQL foi escolhido.
    Além das ferramentas de software citadas acima, também foi avaliada a compatibilidade com microcontroladores através da conexão serial USB com o dispositivo Android. A placa Arduino Uno R3, com microcontrolador ATmega328P, foi escolhida por ser uma das placas mais populares do mercado.
    Cada uma das aplicações citadas acima foram instaladas e executadas no ambiente Linux previamente configurados no Android, utilizando as instruções presentes nos Apêndices C-I, e baseado nestes processo cada ferramenta recebeu uma nota de compatibilidade entre 0 e 5, avaliando a experiência de instalação e utilização. A escala utilizada segue a definição apresentada na Tabela 1.
</p>
<p class="d-flex justify-content-start">Tabela 1</p>
<table class="table table-dark mt-3 table-responsive w-50">
    <thead>
        <tr>
            <th scope="col">Nota de Compatibilidade</th>
            <th scope="col">Significado
            </th>
        </tr>
    </thead>
    <tbody>
        <tr class="p-0">
            <td scope="col-3">0</th>
            <td>Ferramenta Incompatível</td>
        </tr>

        <tr class="p-0">
            <td scope="col-3">1</th>
            <td>Compatibilidade Baixa e/ouInstalação Difícil
            </td>
        </tr>

        <tr class="p-0">
            <td scope="col-3">2</th>
            <td>Ferramenta Incompatível</td>
        </tr>

        <tr class="p-0">
            <td scope="col-3">3</th>
            <td>Ferramenta Incompatível</td>
        </tr>

        <tr class="p-0">
            <td scope="col-3">4</th>
            <td>Ferramenta Incompatível</td>
        </tr>

        <tr class="p-0">
            <td scope="col-3">5</th>
            <td>Compatibilidade Alta e/ou Instalação Normal</td>
        </tr>
    </tbody>
</table>

<p class="font-weight-bold text-docs">
    O resultado do cálculo do RC é um valor decimal entre 0 e 1, representando um resultado entre “Nenhuma Compatibilidade” e “Alta Compatibilidade”, respectivamente.
    Para seu cálculo, foi utilizada a compatibilidade média das aplicações testadas, a partir da soma das notas de compatibilidade de todas as aplicações testadas, dividido
    pela nota total máxima, como na Equação 1.
    Tendo em vista que Pontuação Máxima = 5 e Número de Aplicações = 7, a fórmula pode ser simplificada como na Fórmula 2.
    <img class="mt-2" src="{{ asset('img/nota_compatibilidade.png') }}" alt="Formula teste de compatibilidade">
</p>

<h5 class="d-flex justify-content-start mt-5">
    Resultado de Condições Físicas
</h5>
<p class="font-weight-bold text-docs">
    Após os testes de performance e de compatibilidade, foram avaliadas as condições físicas dos aparelhos analisados, de forma a garantir que estes poderiam ser utilizados como ferramenta principal de
    trabalho por programadores. O objetivo desse teste é considerar as possíveis dificuldades que um usuário pode ter ao utilizar um dispositivo danificado, como a dificuldade de interação com o aparelho
    com uma tela danificada, ou impossibilidade de comunicação serial com o dispositivo caso a porta USB esteja danificada.
    Através dos dados coletados no questionário, apresentados no Apêndice M, os pesos apresentados na Tabela 2 foram atribuídos a alguns tipos de danos encontrados nos dispositivos,
    que atuam como fatores de penalidades caso presentes.
    Tabela 2. Fatores de Penalidade do Resultado de Condições Físicas
</p>

<p class="d-flex justify-content-start">Tabela 2</p>
<table class="table table-dark mt-3 table-responsive w-50">
    <thead>
        <tr>
            <th scope="col">Tipo de Dano</th>
            <th scope="col">Fator de Penalidade</th>
        </tr>
    </thead>
    <tbody>
        <tr class="p-0">
            <td>Touchscreen</td>
            <td scope="col-3">0,20</th>
        </tr>

        <tr class="p-0">
            <td>Display/Tela</td>
            <td scope="col-3">0,15</th>
        </tr>

        <tr class="p-0">
            <td>Botão de ligar</td>
            <td scope="col-3">0,15</th>
        </tr>

        <tr class="p-0">
            <td>Entrada USB/Carregador</td>
            <td scope="col-3">0,15</th>
        </tr>

        <tr class="p-0">
            <td>Bateria (baixa capacidade)</td>
            <td scope="col-3">0,10</th>
        </tr>

        <tr class="p-0">
            <td>Saídas de áudio</td>
            <td scope="col-3">0,05</th>
        </tr>

        <tr class="p-0">
            <td>Entrada de áudio</td>
            <td scope="col-3">0,05</th>
        </tr>

        <tr class="p-0">
            <td>Câmera</td>
            <td scope="col-3">0,05</th>
        </tr>

        <tr class="p-0">
            <td>Total</td>
            <td scope="col-3">1,00</th>
        </tr>
    </tbody>
</table>

<h5 class="d-flex justify-content-start mt-5">
    Resultado Final (RF)
</h5>
<p class="font-weight-bold text-docs">
    O RF tem como função representar as qualidades do dispositivo através de uma pontuação numérica, utilizando como base os dados coletados anteriormente.
    O RP é utilizado como entrada principal no cálculo, representando a nota máxima possível para a avaliação do dispositivo. Já o RC é utilizado como fator de penalidade
    caso o dispositivo tenha baixa compatibilidade com as aplicações testadas. Por último, o RCF também é usado como fator de penalidade, porém focado nas condições físicas do aparelho.
    O cálculo do RF é feito como apresentado na Fórmula 3.
    (3)
</p>

<div class="text-sm">Formula RF</div>
<img class="mt-2" src="{{ asset('img/resultado_final.png') }}" alt="Formula teste de compatibilidade">

<h5 class="d-flex justify-content-start mt-5">
    Selo de Qualidade (SQ)
</h5>
<p class="font-weight-bold text-docs">
    O Selo de Qualidade representa o produto final dos resultados obtidos anteriormente através dos RP, RC e RCF, porém diferentemente do Resultado Final, o SQ representa uma classificação
    do dispositivo. Através do SQ, é possível representar as capacidades de um dispositivo de forma clara e padronizada, garantindo o controle de qualidade dos aparelhos testados.
    Para definição da relação entre o Resultado Final (RF) e o Selo de Qualidade (SQ) foi utilizado um Raspberry Pi 3 Model B e Ubuntu Core 18, com a pontuação base de 319,78,
    obtida a partir da média de cinco testes de performance, apresentados no Apêndice J. Cada nível representa a relação entre a pontuação base e o dispositivo Android avaliado,
    e este pode ser classificado entre 6 níveis de qualidade, como na Tabela 3.
</p>

<p class="d-flex justify-content-start">Tabela 3</p>
<table class="table table-dark mt-3 table-responsive w-50">
    <thead>
        <tr>
            <th scope="col">Selo de Qualidade</th>
            <th scope="col">Resultado Final</th>
            <th scope="col">Relação Pontuação Base</th>
        </tr>
    </thead>
    <tbody>
        <tr class="p-0">
            <td>Qualidade 0</td>
            <td scope="col-3">RF ≥ 20</th>
            <td scope="col-3">1:16</th>
        </tr>

        <tr class="p-0">
            <td>Qualidade 1</td>
            <td scope="col-3">RF ≥ 20</th>
            <td scope="col-3">1:16</th>
        </tr>

        <tr class="p-0">
            <td>Qualidade 2</td>
            <td scope="col-3">RF ≥ 40</th>
            <td scope="col-3">1:8</th>
        </tr>

        <tr class="p-0">
            <td>Qualidade 3</td>
            <td scope="col-3">RF ≥ 80</th>
            <td scope="col-3">1:4</th>
        </tr>

        <tr class="p-0">
            <td>Qualidade 4</td>
            <td scope="col-3">RF ≥ 160</th>
            <td scope="col-3">1:2</th>
        </tr>

        <tr class="p-0">
            <td>Qualidade 5</td>
            <td scope="col-3">RF ≥ 320</th>
            <td scope="col-3">1:1</th>
        </tr>
    </tbody>
</table>
<br>
<br>
@endsection('content')
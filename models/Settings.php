<?php namespace Dmrch\Lgpd\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'dmrch_lgpd_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';


    public function initSettingsData(){
        $this->text = "<p>Utilizamos cookies essenciais e tecnologias semelhantes de acordo com a nossa <a href='politica-de-privacidade'>Política de Privacidade</a> e, ao continuar navegando, você concorda com estas condições.</p>";

        $this->btn_label = 'ACEITAR';

        $this->css = '.dmrch-lgpd {
            position: fixed !important;
            padding: 20px;
            width: 100%;
            bottom: 0;
            z-index: 99999;
        }

        .dmrch-lgpd .content {
            width: 100%;
            margin: auto;
            font-size: 13px;
            background: rgba(0,0,0,.8);
            color: #fff;
            display: flex;
            justify-content: space-around;      
        }

        .dmrch-lgpd .content p {
            display: inline-block;
            padding: 15px 5px;
            margin: 0;
        }

        .dmrch-lgpd .content a {
            color: #fff;
            text-decoration: underline;
            display: inline-block;
        }

        .dmrch-lgpd .content .btn {
            text-decoration: none;
            background: #fff;
            border-radius: 0;
            color: #333;
            font-weight: bold;
            font-size: 16px;
            height: 27px;
            margin: 12px 10px;
            padding: 0px 30px;
            opacity: .6;
        }

        @media screen and (max-width: 991px) {

            .dmrch-lgpd {
                padding: 10px;
            }

            .dmrch-lgpd .content {
                text-align: center; 
                display: block; 
                font-size: 12px;
            } 

            .dmrch-lgpd .content p {
                padding: 10px;
            }

            .dmrch-lgpd .content .btn {
                margin: 5px 5px 10px 5px;
            }
        }';

        $this->politica_text = '
            <h1 align="center"><strong>POLÍTICA DE PRIVACIDADE</strong></h1>

<p align="center">Data da última atualização 01/06/2021</p>

<p>
  <br>
</p>

<p>Este site e todo o seu conteúdo são operados pela <strong>DMRCH</strong>., pessoa jurídica devidamente registrada sob o CNPJ nº 00.000.000/0000-21, com sede na LOGRADOURO R ROBERTO ZIEMANN, NÚMERO 460, CEP 89.255-300, BAIRRO CENTRO, JARAGUA DO SUL - SC.</p

<p>A <strong>Dmrch</strong> tem o compromisso com a transparência, a privacidade e a segurança dos dados de seus Usuários durante todo o processo de interação com nosso site e/ou atendimento presencial e local. Para que entendam melhor quais informações coletamos e como as utilizamos, armazenamos ou excluímos, detalhamos a seguir nossa Política de Privacidade.</p>

<p>A Política de Privacidade da <strong>Dmrch</strong> prestará informações sobre a coleta, uso, armazenamento, proteção, compartilhamento e direitos dos Usuários<strong>&nbsp;</strong>em relação a seus dados pessoais, estando a mesma em conformidade com a legislação vigente, Lei n.º 13.709/2018 (Lei Geral de Proteção de Dados Pessoais – LGPD).</p>

<p align="center"><strong>&nbsp;</strong></p>
<div align="center">

  <table width="100%" cellspacing="0" cellpadding="0" border="1">
    <tbody>
      <tr>
        <td width="100%">

          <p>O USUÁRIO, AO FORNECER SEUS DADOS PESSOAIS, DECLARA CONHECER E ACEITAR ESTA POLÍTICA DE PRIVACIDADE. CASO NÃO CONCORDE COM ALGUMA DAS CLÁUSULAS DESTA POLÍTICA OU DOS TERMOS DE USO, NÃO DEVERÁ UTILIZAR QUAISQUER DE NOSSOS SERVIÇOS.</p>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<p>
  <br>
</p>

<p><strong>DEFINIÇÕES</strong></p>

<p>A fim de facilitar o entendimento da nossa Política de Privacidade, apresentamos as seguintes definições:</p>

<table cellspacing="0" cellpadding="15" border="1">
    <tbody>
        <tr>
            <td>

                <p align="center"><strong>Usuário</strong></p>
            </td>
            <td>

                <p align="center"><strong>Site</strong></p>
            </td>
        </tr>
        <tr>
            <td>

                <p>Toda pessoa que acessa e/ou utiliza o Site e/ou os nossos Serviços, de forma on-line ou off-line.</p>
            </td>
            <td>

                <p>Refere-se a todo o conteúdo e as funcionalidades disponíveis no endereço: www.Dmrch.com.br.</p>
            </td>
        </tr>
        <tr>
            <td>

                <p align="center"><strong>Serviços</strong></p>
            </td>
            <td>

                <p align="center"><strong>Dados Pessoais</strong></p>
            </td>
        </tr>
        <tr>
            <td>

                <p>Refere-se a todo e qualquer serviço prestado pela <strong>Dmrch</strong>.</p>
            </td>
            <td>

                <p>Um dado que permite identificar, direta ou indiretamente, um indivíduo que esteja vivo, como: nome, RG, CPF, gênero, telefone, endereço residencial, localização via GPS, retrato em fotografia, entre outros.</p>
            </td>
        </tr>
        <tr>
            <td>

                <p align="center">Tratamento de dados pessoais</p>
            </td>
            <td>

                <p align="center"><strong>Titular de dados</strong></p>
            </td>
        </tr>
        <tr>
            <td>

                <p>Considera-se tratamento de dado pessoal a coleta, produção, recepção, classificação, utilização, acesso, reprodução, transmissão, distribuição, processamento, arquivamento, armazenamento, eliminação, avaliação ou controle da informação, comunicação, transferência, difusão ou extração de dados de pessoas físicas.</p>
            </td>
            <td>

                <p>Qualquer pessoa física que tenha seus dados pessoais tratados pela<strong>&nbsp;Dmrch</strong>.</p>
            </td>
        </tr>
        <tr>
            <td>

                <p align="center"><strong>Finalidade</strong></p>
            </td>
            <td>

                <p align="center"><strong>Necessidade</strong></p>
            </td>
        </tr>
        <tr>
            <td>

                <p>O que queremos alcançar com o tratamento de dados pessoais.</p>
            </td>
            <td>

                <p>O tratamento de dados pessoais deve se limitar ao mínimo necessário para o propósito almejado. Ou seja, deve ser pertinente, proporcional e não excessivo.</p>
            </td>
        </tr>
        <tr>
            <td>

                <p align="center"><strong>Consentimento</strong></p>
            </td>
            <td>

                <p align="center"><strong>Cookies</strong></p>
            </td>
        </tr>
        <tr>
            <td>

                <p>Autorização clara e objetiva que o Usuário<strong>&nbsp;</strong>(titular) dá para tratamento de seus dados pessoais com finalidade previamente estipulada. Após dar o consentimento, você pode revogá-lo a qualquer momento. A revogação não cancela os processamentos realizados previamente.</p>
            </td>
            <td>

                <p>Os cookies são arquivos de internet que armazenam temporariamente o que o internauta está visitando na rede.</p>
            </td>
        </tr>
        <tr>
            <td>

                <p align="center"><strong>Controlador</strong></p>
            </td>
            <td>

                <p align="center"><strong>Encarregado</strong></p>
            </td>
        </tr>
        <tr>
            <td>

                <p>Pessoa natural ou jurídica, de direito público ou privado, a quem competem as decisões referentes ao tratamento de dados pessoais.</p>
            </td>
            <td>

                <p>Pessoa indicada pelo controlador para atuar como canal de comunicação entre o controlador, os titulares dos dados e a Autoridade Nacional de Proteção de Dados.</p>
            </td>
        </tr>
    </tbody>
</table>

<p>
  <br>
</p>

<p>Caso tenha dúvidas ou precise tratar de qualquer assunto relacionado a esta Política de Privacidade, entre em contato conosco através do e-mail: <a href="mailto:ouvidor@Dmrch.com.br">ouvidor@Dmrch.com.br</a>.</p>

<p>
  <br>
</p>

<p><strong>1. A QUEM ESSA POLÍTICA DE PRIVACIDADE SE APLICA?</strong></p>

<p>1.1. Aplica-se a todos os clientes, visitantes, parceiros e visitantes da <strong>Dmrch</strong>, incluindo site e estabelecimentos físicos, sede ou extensão, que de alguma forma tenham dados pessoais tratados por nós.</p>

<p>
  <br>
</p>

<p><strong>2. QUE TIPO DE INFORMAÇÕES PESSOAIS COLETAMOS E UTILIZAMOS?</strong></p>

<p>2.1. A <strong>Dmrch</strong> coleta e armazena os seguintes tipos de informações:</p>

<ul>
  <li><strong><u>Informações que você nos fornece</u></strong>: a <strong>Dmrch</strong>. coleta informações do Usuário de diversas formas: quando você fornece seu nome e e-mail e mensagem para contato; quando fornece informações de sua identificação pessoal (Carteira de Identidade) e CPF, por exemplo, para formalização de contratos; para emissão da nota fiscal; adquire um dos empreendimentos comercializados através de seus prepostos e/ou representantes legais ou site; cria uma conta e fornece dados no “Contato”, “Fale com a gente”, “Ligamos para Você”, “Trabalhe Conosco” ou assina nossa newsletter; quando interage com a “Universidade Corporativa”; aciona ou solicita um contato direto do nosso pessoal de Atendimento aos Clientes, inclusive contato direto do Usuário mediante WhatsApp; quando participa de pesquisas ou promoções de marketing, inclusive em campanhas off line, etc. Dentre as informações que podem ser solicitadas estão: nome completo, e-mail, CPF e números de telefone. No caso de contato através do “Trabalhe Conosco”, se você for um Usuário selecionado, as informações serão mantidas durante todo o período de avaliação e testes para finalização do processo de seleção e, caso você seja aprovado e decida, de fato, fazer parte da equipe de colaboradores da <strong>Dmrch</strong>, pelo tempo em que se manter o relacionamento entre a você e a <strong>Dmrch</strong>, com exceção daquelas necessárias para cumprimento de obrigações legais ou para exercício regular de direitos em processo judicial, administrativo ou arbitral, neste último caso pelos prazos prescricionais relativos a demandas que possam surgir em decorrência do processo de seleção e da relação empregatícia.</li>
  <li><strong><u>Informações coletadas automaticamente pela Dmrch:</u></strong> coletamos e armazenamos determinadas informações sempre que o Usuário interage conosco. Por exemplo, utilizamos cookies e obtemos informações quando seu navegador acessa o nosso site; quando você clica em anúncios, e-mails de parceiros e outros conteúdos fornecidos por nós em outros sites.</li>

</ul>

<p>
  <br>
</p>

<p><strong>3. POR QUE SOLICITAMOS SEUS DADOS PESSOAIS?</strong></p>

<p>3.1. Os dados são necessários para: a) viabilizar o acesso as informações requeridas; b) otimizar sua interação conosco; c) garantir a segurança do site e dos dados que processa; d) informar o Usuário sobre ofertas que estejam relacionadas ao perfil de compra dele; e) cumprir obrigações legais; f) oferecer os melhores resultados de buscas no site; g) fins administrativos e de gestão.</p>

<p>3.2. O fornecimento dos dados permite: a) entregar a informação requerida; b) enviar atualizações sobre o status das solicitações; c) prestar serviços adequados às necessidades do Usuário; d) melhorar a experiência de compra dos visitantes e clientes da <strong>Dmrch</strong>; e) fazer análises e pesquisas de mercado; f) manter o Usuário informado sobre os serviços e empreendimentos que oferecemos; f) executar publicidade online direcionada; g) prevenir, detectar e investigar atividades que sejam proibidas ou ilegais; melhorar nosso website e produtos.</p>

<p>3.3. A <strong>Dmrch</strong> utiliza bases legais, que podem variar de acordo com a finalidade da coleta, para tratar os dados pessoais dos clientes. O prazo de armazenamento pode mudar conforme a base legal aplicável a cada situação e a finalidade.</p>

<p>3.4. Os serviços de marketing são oferecidos por meio de comunicações gratuitas sobre ofertas, serviços e produtos dirigidas ao Usuário, relacionadas ao seu perfil no site e a compras que fez. Esse serviço abrange e-mails, SMS e WhatsApp. Vale ressaltar que o Usuário pode cancelar o serviço, a qualquer momento, pelo link disponibilizado no rodapé da mensagem, ou você poderá solicitar diretamente, enviando um e-mail para <a href="mailto:ouvidor@Dmrch.com.br">ouvidor@Dmrch.com.br</a>.</p>

<p>3.5. A <strong>Dmrch</strong> não dividirá essas informações espontaneamente com o governo ou órgãos públicos, a não ser que seja obrigada a fazê-lo em virtude de lei ou regulamentação aplicável.</p>

<p><strong>&nbsp;</strong></p>

<p><strong>4. QUAIS SÃO OS DIREITOS DO TITULAR DE DADOS?</strong></p>

<p>4.1. A partir do início da vigência da LGPD, o titular dos dados pessoais terá o direito de obter da <strong>Dmrch</strong>, a qualquer momento, mediante requisição formal, informações referentes aos seus dados.</p>

<p>4.2. A <strong>Dmrch</strong> terá 15 (quinze) dias para responder às solicitações dos titulares. Os pedidos serão analisados conforme previsto em legislação vigente e, por questões legais, algumas solicitações podem não ser atendidas.</p>

<p>
  <br>
</p>

<p><strong>5. COMO EXERCER OS SEUS DIREITOS?</strong></p>

<p>5.1. Caso você concorde em receber comunicações da <strong>Dmrch</strong>, utilizaremos seus dados cadastrais para realizar essa comunicação. Você poderá solicitar, a qualquer tempo, a revogação desta solicitação e a exclusão dos dados armazenados exclusivamente para este fim. Esta solicitação pode ser feita, diretamente, a partir das mensagens de e-mail que encaminhamos a você, pelo link disponibilizado no rodapé da mensagem, ou você poderá solicitar diretamente, enviando um e-mail para <a href="mailto:ouvidor@Dmrch.com.br">ouvidor@Dmrch.com.br</a>.</p>

<p>5.2. Para mudar suas preferências em relação às notificações (incluindo as comunicações de marketing), a qualquer momento, você pode entrar em contato conosco através dos nossos canais de atendimento. Se não quiser receber nossas comunicações de marketing, também pode cancelar a assinatura clicando no link enviado junto com o e-mail do marketing.</p>

<p><br></p>



<p><strong>6. OS DADOS PESSOAIS SÃO TRATADOS PELA Dmrch DE ACORDO COM AS BASES LEGAIS PREVISTAS EM LEI, SENDO ELAS:&nbsp;</strong></p>

<p>a) cumprimento das obrigações legais e regulatórias; b) exercício regular de direitos; c) proteção do crédito; d) execução dos contratos firmados com seus clientes; e) interesses legítimos da <strong>Dmrch</strong>, sem ferir os direitos e liberdades fundamentais, respeitando a legítima expectativa do nosso Usuário; f) consentimento do nosso Usuário<strong>.</strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>7.&nbsp;</strong><strong>POR QUANTO TEMPO GUARDAMOS OS DADOS PESSOAIS?</strong></p>

<p>7.1. A <strong>Dmrch</strong> encerra o tratamento de dados pessoais do Usuário assim que verificado o alcance da finalidade para o qual foi coletado ou quando os dados deixam de ser necessários ou pertinentes ao alcance da finalidade específica.</p>

<p>7.2. Se houver alguma justificativa legal ou regulatória, os dados poderão continuar armazenados ainda que a finalidade para a qual foram coletados ou tenham sido tratados tenha se exaurido.</p>

<p>7.3. Uma vez finalizado o tratamento, observadas as disposições desta seção, os dados são apagados ou anonimizados.</p>

<p>
  <br>
</p>

<p><strong>8. COM QUEM COMPARTILHAMOS SEUS DADOS?</strong></p>

<p>8.1. <strong><u>Prestadores de Serviços</u></strong>: Podemos empregar empresas e indivíduos terceirizados para administrar e prestar serviços em nosso nome (como empresas que fornecem suporte ao cliente, empresas que contratamos para hospedar, gerenciar, manter e desenvolver nosso site, plataformas, sistemas de TI). Esses terceiros podem usar suas informações apenas como indicado pela <strong>Dmrch</strong> e de maneira consistente com esta Política de Privacidade, e são proibidos de usar ou divulgar suas informações para qualquer outra finalidade. Adicionalmente, dados como IP (<em>Internet Protocol</em>) e informações de acesso são enviadas para os serviços de servidor do site.</p>

<p>8.2. <strong><u>Consultores Profissionais</u>:</strong> A <strong>Dmrch</strong> poderá divulgar seus dados pessoais para consultores profissionais, corretores imobiliários, como advogados, auditores e seguradoras, correspondentes bancários, sempre que necessário, no decorrer dos serviços profissionais que eles prestem a nós.</p>

<p>8.3. <strong><u>Conformidade com as leis e o cumprimento das leis; proteção e segurança</u></strong>: A <strong>Dmrch</strong> poderá divulgar informações sobre o Usuário a autoridades governamentais ou policiais (incluindo autoridades fiscais) ou a entidades privadas, conforme exigido por lei, e divulgar e usar as informações que consideramos necessárias ou adequadas para (a) cumprir as leis aplicáveis, solicitações legais e processos legais, como responder a intimações ou solicitações de autoridades governamentais; (b) cumprir os termos e condições que regem nossos produtos e serviços, inclusive operacionalizados através de correspondentes bancários; (c) proteger nossos direitos, privacidade, segurança ou propriedade, e/ou do Usuário ou de outros; e (d) proteger, investigar e impedir atividades fraudulentas, prejudiciais, não autorizadas, antiéticas ou ilegais.</p>

<p>8.4. <strong><u>Órgãos públicos e autoridades governamentais</u></strong>: (i) em decorrência de ordem judicial ou por solicitação de autoridade administrativa competente para realizar essa solicitação (inclusive relacionados aos registros imobiliários e cartorários consequentes de qualquer negócio realizado entre as partes e (ii) para tomada de providencias legais, judiciais ou administrativas, no sentido de defender direitos legítimos da <strong>Dmrch,</strong> em processo judicial ou administrativo, sempre respeitando as previsões estabelecidas nesta Política de Privacidade</p>

<p>8.5. <strong><u>Agências ou prestadores de serviços de marketing</u></strong>: a partir da coleta automatizada de dados, com o objetivo de qualificar a entrega de anúncios – marketing digital -, levando-se em conta o perfil do Usuário do site e propriedades digitais da <strong>Dmrch.</strong></p>

<p>8.6<strong>. <u>Transferência de Negócios:</u></strong> A <strong>Dmrch</strong> poderá vender ou transferir alguns ou todos os seus negócios ou ativos, incluindo seus dados pessoais, em relação a uma transação comercial (ou transação comercial potencial), como uma fusão, consolidação, aquisição, reorganização ou venda de ativos ou no caso de falência, em cujo caso faremos esforços consideráveis para exigir que o destinatário honre esta Política de Privacidade.</p>

<p>8.7. <strong><u>Compartilhamento de Dados Sensíveis</u></strong>. A <strong>Dmrch</strong> não coleta dados sensíveis em nenhuma hipótese, nem realiza qualquer atividade de tratamento envolvendo dados sensíveis. Apenas a título de informação, dados sensíveis são aqueles sobre origem racial ou étnica, convicção religiosa, opinião política, filiação a sindicato ou a organização de caráter religioso, filosófico ou político, dado referente à saúde ou à vida sexual, dado genético ou biométrico, quando vinculado a uma pessoa natural.</p>

<p><strong>&nbsp;</strong></p>

<p><strong>9. DADOS DE CRIANÇAS E ADOLESCENTES</strong></p>

<p>9.1 Não coletamos dados de crianças e adolescentes. As informações disponibilizadas nos canais digitais da <strong>Dmrch</strong> não são destinadas ao público infanto-juvenil. Também é requisito de nossas campanhas comerciais ou nossos processos de seleção de novos colaboradores que os candidatos sejam maiores e plenamente capazes. Portanto, não fazemos captação ou tratamento, em nenhuma hipótese, de dados pessoais de crianças ou adolescentes.</p>

<p>
  <br>
</p>

<p><strong>10. ONDE SÃO ARMAZENADAS AS INFORMAÇÕES DOS DADOS PESSOAIS?</strong></p>

<p>10.1. Todos os dados pessoais dos <strong>Usuários&nbsp;</strong>coletados por nós são armazenados na rede, são hospedados pelo serviço da LOCAWEB SERVIÇOS DE INTERNET S/A, inscrita no CNPJ sob o n.º 02.351.877/0001-52, com sede na Rua Itapaiúna, n.º 2434, Vila Andrade, São Paulo/SP.</p>

<p>
  <br>
</p>

<p><strong>11. LINKS PARA TERCEIROS&nbsp;</strong></p>

<p>11.1. Pode existir, nas páginas do site da <strong>Dmrch</strong> e em qualquer outro site ou serviço digital disponibilizado diretamente pela <strong>Dmrch</strong>, links para outros sites, aplicações ou plataformas (por exemplo, no caso de acesso ao “Trabalhe Conosco”, “Universidade Corporativa” ou “Acesso Restrito a Clientes”). Isso não significa que a <strong>Dmrch</strong> endossa ou se responsabiliza por qualquer coisa que aconteça fora de seus domínios. Você também deve ter ciência de que, ao clicar nestes links, estará sujeito aos termos de uso e políticas de privacidade destes sites, aplicações e plataformas externas.</p>

<p>
  <br>
</p>

<p><strong>12. COOKIES&nbsp;</strong></p>

<p>12.1. Cookies são pequenos arquivos de dados que são colocados no seu computador ou em outros dispositivos (como \'smartphones\' ou \'tablets\') enquanto você navega no site.</p>

<p>12.2. Utilizamos cookies, pixels e outras tecnologias (coletivamente, "cookies") para reconhecer seu navegador ou dispositivo, aprender mais sobre seus interesses, fornecer recursos e serviços essenciais, melhorar sua experiência em nosso site e para: a) acompanhar suas preferências para enviar somente anúncios de seu interesse. Você pode definir suas preferências por meio de sua Busca; b) realização de pesquisas e diagnósticos para melhorar o conteúdo, produtos e serviços; c) impedir atividades fraudulentas e d) melhorar a segurança.</p>

<p>12.3 <strong>Lembramos que você pode, a qualquer momento, ativar em seu navegador mecanismos para informá-lo quando os cookies estiverem acionados ou, ainda, impedir que sejam ativados, através das preferências do seu navegador.</strong></p>

<p>
  <br>
</p>

<p><strong>13. SEGURANÇA NO TRATAMENTO DOS DADOS PESSOAIS</strong></p>

<p>13.1. A <strong>Dmrch</strong> se compromete a aplicar as medidas técnicas e organizativas aptas a proteger os dados pessoais de acessos não autorizados e de situações de destruição, perda, alteração, comunicação ou difusão de tais dados.</p>

<p>13.2. Para a garantia da segurança, serão adotadas soluções que levem em consideração: as técnicas adequadas; os custos de aplicação; a natureza, o âmbito, o contexto e as finalidades do tratamento; e os riscos para os direitos e liberdades do Usuário.</p>

<p>13.3. No entanto, a <strong>Dmrch</strong> se exime de responsabilidade por culpa exclusiva de terceiro, como em caso de ataque de hackers ou crackers, ou culpa exclusiva do Usuário, como no caso em que ele mesmo transfere seus dados a terceiros. A <strong>Dmrch</strong> se compromete, ainda, a comunicar o Usuário em prazo adequado caso ocorra algum tipo de violação da segurança de seus dados pessoais que possa lhe causar um alto risco para seus direitos e liberdades pessoais.</p>

<p>13.4. A violação de dados pessoais é uma violação de segurança que provoque, de modo acidental ou ilícito, a destruição, a perda, a alteração, a divulgação ou o acesso não autorizado a dados pessoais transmitidos, conservados ou sujeitos a qualquer outro tipo de tratamento.</p>

<p>13.5. Por fim, a <strong>Dmrch</strong> se compromete a tratar os dados pessoais do Usuário com confidencialidade, dentro dos limites legais.</p>

<p><strong>&nbsp;</strong></p>

<p><strong>14. TRANSFERÊNCIA INTERNACIONAL DE DADOS</strong></p>

<p>14.1. A <strong>Dmrch</strong> poderá armazenar seus dados em servidores de computação em nuvens localizados fora do Brasil, observando todos os requisitos estabelecidos pela lei 13.709/18 (Lei Geral de Proteção de Dados - LGPD) e sempre busca as melhores e mais modernas práticas de segurança da informação.</p>

<p><strong>&nbsp;</strong></p>

<p><strong>15. COMO ENTRAR EM CONTATO COM O ENCARREGADO DA PROTEÇÃO DE DADOS PESSOAIS?</strong></p>

<p>15.1. A <strong>Dmrch&nbsp;</strong>tem um responsável por privacidade e proteção e dados pessoais designado. Caso alguma cláusula ou termo não tenha ficado claro ou, ainda, se houver alguma sugestão ou solicitação referente à privacidade e proteção de dados pessoais entre em contato com a <strong>Dmrch</strong> pelos meios de comunicação apresentados a seguir:</p>

<p>e-mail: <a href="mailto:ouvidor@Dmrch.com.br">ouvidor@Dmrch.com.br</a></p>

<p>Telefone: +55 (47) 3275-8500</p>

<p>15.2. O encarregado da proteção de dados é o responsável escolhido pela <strong>Dmrch</strong> para atuar como canal de comunicação entre o controlador, os titulares dos dados e a Autoridade Nacional de Proteção de Dados (ANPD).</p>

<p>
  <br>
</p>

<p><strong>16. ALTERAÇÕES DESTA POLÍTICA DE PRIVACIDADE</strong></p>

<p>16.1. A presente versão desta Política de Privacidade foi atualizada pela última vez em 01 de junho de 2021.</p>

<p>16.2. A <strong>Dmrch</strong> se reserva o direito de modificar, a qualquer momento esta Política de Privacidade, especialmente para adaptar às evoluções do site, seja pela disponibilização de novas funcionalidades, seja pela supressão ou modificação daquelas já existentes ou em virtude de alterações na legislação. Alterações e esclarecimentos vão surtir efeito imediatamente após sua publicação no aplicativo.</p>

<p>16.3. O Usuário será explicitamente notificado em caso de alteração desta política por meio do e-mail cadastrado no site.</p>

<p>16.4. Ao utilizar o serviço após eventuais modificações, o Usuário demonstra sua concordância com as novas normas. Caso discorde de alguma das modificações, o Usuário deverá pedir, imediatamente, o cancelamento de sua conta e apresentar a sua ressalva ao serviço de atendimento, se assim o desejar.</p>

<p>
  <br>
</p>

<p><strong>17. DO DIREITO APLICÁVEL E DO FORO</strong></p>

<p>17.1. Essa Política de Privacidade é regida pelas leis da República Federativa do Brasil.</p>

<p>17.2. Todas as controvérsias desta Política de Privacidade serão solucionadas pelo foro da Comarca de Jaraguá do Sul, Estado de Santa Catarina, Brasil, com exclusão de qualquer outro, por mais privilegiado que seja ou venha a ser.</p>
        ';
    }
}
<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Diretório admin';
$string['availablelangs'] = 'Pacotes de idioma disponíveis';
$string['chooselanguagehead'] = 'Escolha um idioma';
$string['chooselanguagesub'] = 'Por favor, escolha o idioma para a instalação.Este idioma também será utilizado como idioma padrão do site, embora você possa mudar mais tarde.';
$string['clialreadyconfigured'] = 'Arquivo config.php já existe. Por favor, use admin/cli/install_database.php para instalar o Moodle neste site.';
$string['clialreadyinstalled'] = 'Arquivo config.php já existe. Por favor use admin/cli/install_database.php para atualizar o Moodle neste site.';
$string['cliinstallheader'] = 'Programa de instalação por linha de comando do Moodle {$a}';
$string['clitablesexist'] = 'O banco de dados possui tabelas, a instalação por CLI não pode continuar.';
$string['databasehost'] = 'Host do banco de dados';
$string['databasename'] = 'Nome do banco de dados';
$string['databasetypehead'] = 'Escolha o driver do banco de dados';
$string['dataroot'] = 'Diretório de dados';
$string['datarootpermission'] = 'Permissões nos diretórios de dados';
$string['dbprefix'] = 'Prefixo das tabelas';
$string['dirroot'] = 'Diretório Moodle';
$string['environmenthead'] = 'Verificando o ambiente ...';
$string['environmentsub2'] = 'Cada release do Moodle requer uma versão mínima do PHP e diversas extensões do PHP.
A verificação completa do ambiente é feita antes de cada instalação e atualização.';
$string['errorsinenvironment'] = 'Verificação do Ambiente falhou!';
$string['installation'] = 'Instalação';
$string['langdownloaderror'] = 'Infelizmente não foi possível fazer download do idioma "{$a}". O processo de instalação continuará em Inglês.';
$string['memorylimithelp'] = '<p>O limite de memória do PHP configurado atualmente no seu servidor é de {$a}.</p>

<p>Este limite pode causar problemas com o Moodle no futuro, especialmente quando muitos módulos estiverem ativados ou em caso de um número elevado de usuários.</p>

<p>É aconselhável a configuração do limite de memória com o valor mais alto possível, como 40M. Você pode tentar uma das seguintes opções:</p>
<ol>
<li>Se você puder, recompile o PHP com <i>--enable-memory-limit</i>.
Com esta operação Moodle será capaz de configurar o seu limite de memória sózinho.</li>
<li>Se você tiver acesso ao arquivo php.ini, você pode mudar o parâmetro <b>memory_limit</b> para um valor próximo a 40M. Se você não tiver acesso a este arquivo de configuração, peça ao administrador do sistema para fazer esta configuração para você.</li>
<li>Em alguns servidores é possível fazer esta mudança criando um arquivo .htaccess no diretório Moodle. O arquivo deve conter a seguinte expressão:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Entretanto, em alguns servidores não aceitam este procedimento e <b>todas</b> as páginas PHP do servidor ficam bloqueadas ou imprimem mensagens de erro. Neste caso será necessário excluir o arquivo .htaccess .</p>
</li></ol>';
$string['paths'] = 'Caminhos';
$string['pathserrcreatedataroot'] = 'O diretório de dados ({$a->dataroot}) não pode ser criado pelo instalador.';
$string['pathshead'] = 'Confirme os caminhos';
$string['pathsrodataroot'] = 'O diretório de dados raiz não pode ser acessado para escrita.';
$string['pathsroparentdataroot'] = 'O diretório pai ({$a->parent}) não pode ser escrito. O diretório de dados ({$a->dataroot}) não pode ser criado pelo instalador.';
$string['pathssubadmindir'] = 'Alguns poucos webhosts usam /admin como um URL especial para acesso ao painel de controle ou outras coisas. Infelizmente isto conflita com a localizaçao padrão das páginas do administrador Moodle. Você pode corrigir isso renomeando a pasta admin na sua instalação, e colocando esse novo nome aqui. Por exemplo: <em>moodleadmin</em>. Isto irá corrigir os links das páginas do administrador Moodle.';
$string['pathssubdataroot'] = '<p>Um diretório em que Moodle armazenará todo o conteúdo de arquivos enviados pelos usuários. </p>
<p>Este diretório deve ser legível e gravável pelo usuário do servidor web (geralmente "www-data \',\' nobody \', ou\' apache\'). </p>
<p>Não deve ser diretamente acessível através da web. </p>
<p>Se o diretório não existir atualmente, o processo de instalação tentará criá-lo. </p>';
$string['pathssubdirroot'] = '<p>Caminho completo do diretório para instalação do Moddle.</p>';
$string['pathssubwwwroot'] = '<p>O endereço completo em que Moodle pode ser acessado ou seja, o endereço que os usuários vão digitar na barra de endereços do seu navegador para acessar Moodle. </p>
<p>Não é possível acessar Moodle usando múltiplos endereços. Se o seu site é acessível através de múltiplos endereços, em seguida, escolher o mais fácil e configurar um redirecionamento permanente para cada um dos outros endereços. </p>
<p>Se o seu site é acessível tanto a partir da Internet e, a partir de uma rede interna (às vezes chamado de Intranet), em seguida, use o endereço público aqui. </p>
<p>Se o endereço atual não está correto, por favor, mude o URL na barra de endereços do navegador e reiniciar a instalação. </p>';
$string['pathsunsecuredataroot'] = 'A localização da pasta de dados não é segura.';
$string['pathswrongadmindir'] = 'Diretório Admin não existe';
$string['phpextension'] = 'Extensão PHP {$a}';
$string['phpversion'] = 'Versão do PHP';
$string['phpversionhelp'] = '<p>O Moodle requer uma versão PHP de pelo menos 5.6.5 ou 7.1 (o 7.0.x tem algumas limitações do mecanismo).</p>
<p>Atualmente você está executando a versão {$a}.</p>
<p>Você deve atualizar o PHP ou migrar para um host com uma versão mais recente do PHP.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Você está vendo esa página pois instalou com sucesso o pacote<strong>{$a->packname} {$a->packversion}</strong>. Parabéns!';
$string['welcomep30'] = 'Esta versão do <strong>{$a->installername}</strong> inclui as aplicações para a criação de um ambiente em que o <strong>Moodle</strong> possa operar:';
$string['welcomep40'] = 'O pacote inclui também o <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'O uso das aplicações incluídas neste pacote é regulamentado pelas respectivas licenças. O instalador completo <strong>{$a->installername}</strong> é <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> e é distribuído com uma licença <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'As páginas a seguir conduzirão você por algumas etapas para configurar e instalar o <strong>Moodle</strong> facilmente em seu computador. Você pode aceitar as configurações padrão ou, opcionalmente, alterá-las para atender às suas próprias necessidades.';
$string['welcomep70'] = 'Clique no botão "Próximo" abaixo para continuar a configuração do <strong>Moodle</strong>.';
$string['wwwroot'] = 'Endereço web';

<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'jornadapat2017');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'jornadapat2017');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Slsme@87');

/** Nome do host do MySQL */
define('DB_HOST', 'jornadapat2017.mysql.dbaas.com.br');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RA9!V7l:8)q+zMsoPOVWq,puh{WL`pwVJ^w<(MZ09dKfTk9$z`E)8(Oc.$-!@wQe');
define('SECURE_AUTH_KEY',  'qE*t)e]V,r Ou 4ia(NUdh/Z5nY!f{zc3dIxvNc~x<S,!Q&Bp(C4m1[Qz#6`tpmr');
define('LOGGED_IN_KEY',    '9[uN[Z DE(AhQl=gir5syBSX>XR;j&?kgH:lyIyV%q)I<AjU[|zAx.`A*zER^$=*');
define('NONCE_KEY',        'tSXWK2/;SO}Ub@R -q(mYm$6X+`@q<#~kNP33I1n^PaF=qk9(8{QH.rnm[h0R@`V');
define('AUTH_SALT',        '=8X,B<iOrR~P1Z>&[5y@#=]ew$0PS]RaJ0j>G8.C|2}HiJ~G-r!S=@@EHH|v=gL|');
define('SECURE_AUTH_SALT', '1Y%1`%X$uk}yAc,aF*LI35hF?Pu7=4))C|_>h$sEF#jRegp[A)RLwd&]b4US[4M#');
define('LOGGED_IN_SALT',   'Hg!@6V 2c}g2wO%m1lJ)SkE@wrbdf!:e#.;AGJ_o:ow4/[?-yfnN+UJ6| vpLG_=');
define('NONCE_SALT',       'ITXs#ash_Uu:$W]QZRH!$>1hA+2ZyJdtX[u,KM#>2=RKd^j]@rd|+C%T%t2t4ftx');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

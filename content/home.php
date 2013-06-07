<?php
$basics[] = array('label' => 'Doctype correto');
$basics[] = array('label' => 'Codificação de caracteres correta (Character set)');
$basics[] = array('label' => '(X)HTML válido (<a href="http://validator.w3.org/">http://validator.w3.org/</a>)');
$basics[] = array('label' => 'Meta title');
$basics[] = array('label' => 'Sem links quebrados (links, menus, folhas de estilo, javascripts, etc)');
$basics[] = array('label' => 'Favicon');
$basics[] = array('label' => 'Notificação de browsers desatualizados (<a href="http://www.browser-update.org/">http://www.browser-update.org/</a>)');
$basics[] = array('label' => 'Páginas de erro tratadas');
$basics[] = array('label' => 'Tableless');
$basics[] = array('label' => 'Layout sendo exibido de forma semelhante nos navegadores mais populares: Chrome, Firefox, Opera, Safari e Internet Explorer');
$basics[] = array('label' => 'Textos "XXXX", "nonononos" e "Lorem Ipsuns" retirados');
$smarty->assign('basics',$basics);

$accessibility[] = array('label' => 'Atributo alt em todas as imagens');
$accessibility[] = array('label' => 'Links descritivos');
$accessibility[] = array('label' => 'Conteúdo acessível mesmo com as CSSs desabilitadas ou não suportadas pelo browser do usuário');
$accessibility[] = array('label' => 'Site é consistente em browsers de texto como o Lynx');
$accessibility[] = array('label' => 'Legível em dispositivos e impresso');
$accessibility[] = array('label' => 'Bem visualizado em dispositivos portáteis');
$accessibility[] = array('label' => 'Bem visualizado em diferentes resoluções do browser');
$accessibility[] = array('label' => 'Mapa do site e página para contato fáceis de serem localizados');
$accessibility[] = array('label' => 'Link para a home em todas as páginas');
$smarty->assign('accessibility',$accessibility);

$css[] = array('label' => 'Folhas de estilo externas à página');
$css[] = array('label' => 'Chamadas dentro do <i>&lt;head&gt;</i>');
$css[] = array('label' => 'CSS próprio para impressão (<i>media="print"</i>)');
$css[] = array('label' => 'CSS válido (<a href="http://jigsaw.w3.org/css-validator/">http://jigsaw.w3.org/css-validator/</a>)');
$smarty->assign('css',$css);

$javascript[] = array('label' => 'Javascripts externos à página');
$javascript[] = array('label' => 'Chamadas Javascript no final da página');
$javascript[] = array('label' => 'Sem erros de Javascript');
$javascript[] = array('label' => 'Validação da entrada de dados (validação de formulários)');
$smarty->assign('javascript',$javascript);

$seo[] = array('label' => 'Meta title única por página');
$seo[] = array('label' => 'Meta keywords');
$seo[] = array('label' => 'Meta description');
$seo[] = array('label' => 'Utilização correta das tags de cabeçalho (<i>h1</i>, <i>h2</i>, <i>h3</i>... <i>h6</i>)');
$seo[] = array('label' => 'URLs amigáveis');
$seo[] = array('label' => 'Sitemap.xml');
$smarty->assign('seo',$seo);

$performance[] = array('label' => 'Imagens utilizando <i>sprites</i>');
$performance[] = array('label' => 'Imagens sendo exibidas do tamanho exato (sem redimensionamento no browser)');
$performance[] = array('label' => 'Folhas de estilos e Javascripts minimizados');
$smarty->assign('performance',$performance);
?>
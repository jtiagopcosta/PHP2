<?php
/* Smarty version 3.1.33, created on 2019-01-15 00:03:06
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/sobre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3d233a9b87e5_99352368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c883c670fe3f61cf3b92509af4c010e50f27926' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/sobre.tpl',
      1 => 1547509618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3d233a9b87e5_99352368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="sobre">
    <p>Este trabalho foi realizado no âmbito da Unidade Curricular de SIEM do 5º ano do MIEEC e é da autoria de: </p>
    <ul>
        <li>Jorge Tiago Costa up201104356</li>
        <li>Caio Andrade up201803231</li>
    </ul>
    <p>O <i>site</i> será bem apresentado em qualquer resolução. Os testes foram sempre feitos usando o Mozilla Firefox versão 63, com um zoom de 90%.</p>

    <div class="ficheiros">		
        <a href="./css">
        <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/css.png">
        </a>
            
        <a href="./mockup/JorgeCosta_CaioAndrade_Mockup.pptx">
        <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/ppt.png">
        </a>		
        
        <a href="./JorgeCosta_CaioAndrade_trabalhoPHP-1.zip">
        <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/zip.png">
        </a>		
    </div>              
</div>
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

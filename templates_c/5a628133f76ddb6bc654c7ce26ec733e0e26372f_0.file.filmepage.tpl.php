<?php
/* Smarty version 3.1.33, created on 2019-01-14 03:04:32
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/filmepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3bfc403a3843_71907104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a628133f76ddb6bc654c7ce26ec733e0e26372f' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/filmepage.tpl',
      1 => 1547421819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3bfc403a3843_71907104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--Retirado a função Foreach, por ja ter os dados vindo do Fetch por completo-->
<div class="pagfilme">
    <img class="imagem_filme" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['filme']->value['imagem'];?>
">

    <div class="dados">
            <span class="nome"> <?php echo $_smarty_tpl->tpl_vars['filme']->value['nome'];?>
</span><br/>
            <span > <?php echo $_smarty_tpl->tpl_vars['filme']->value['genero'];?>
</span><br/>
            <p><span class="p"> Realizador:</span> <?php echo $_smarty_tpl->tpl_vars['filme']->value['autor'];?>
</p> 
            <p><span class="p"> Elenco:</span> <?php echo $_smarty_tpl->tpl_vars['filme']->value['elenco'];?>
<p>
           <p><span class="p"> Descrição:</span> <span class="texto"><?php echo $_smarty_tpl->tpl_vars['filme']->value['descricao'];?>
</span></p>
    </div>
    <div class="analises">
        <div class="analiseshead">
        <span class="nome"> Análises</span>
        </div>
        <div class="analisesbody">
            <div class="introduzir">
				<form class="form" action="database/upanalise.php" method="post" enctype="multipart/form-data">
				<input type="hidden"  name="id" value="$_GET['id']">
				<input type="hidden"  name="id2" value="<$_SESSION['id']">
				<textarea name="mensagem" class="analisetext" placeholder="Escreva aqui a sua análise" value="descrição" required></textarea><br>
				<input type="submit" value="Adicionar Análise" name="submit"><br><br><br>
				</form>	
            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['analises']->value, 'analise');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['analise']->value) {
?>
                <img class="userpic" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/john">
                <div class="analise">
                
                <span > <?php echo $_smarty_tpl->tpl_vars['analise']->value['analise'];?>
</span><br/>
                
                </div>
                
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
 
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

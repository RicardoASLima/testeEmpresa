<?php
/**
 * CommonPage
 *
 * @version    1.0
 * @package    control
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class PessoaForm extends TPage
{
    public function __construct()
    {
        parent::__construct();
        parent::add(new TLabel('<div>
            <div style="width: 100%">
                <div style="clear:both">
                    <div id="div_breadcrumbs">
                        <ol class="tbreadcrumb">
                            <li class="home"><a generator="adianti" href="engine.php" title="Home"></a></li>
                            <li><a><span>Common pages</span></a></li>
                            <li><span>Formulario de Pessoas</span></li>
                        </ol>
                    </div>
                </div>
                <div style="clear:both">
                    <div class="card panel" style="width: 100%" widget="bootstrapformbuilder" form="" id="">
                        <div class="card-header panel-heading">
                            <div class="panel-title card-title">Formulario de Pessoas</div>
                        </div>
                        <form class="form-horizontal" type="bootstrap" novalidate="" enctype="multipart/form-data" name="" id="" method="post">
                            <div class="card-body panel-body" style="width: 100%">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" style="padding:10px; margin-top: -1px;" id="">
                                        <div class="form-group tformrow row ">
                                            <div class="col-sm-4 col-lg-2 fb-field-container  col-form-label control-label" style="min-height:26px">
                                                <div class="fb-inline-field-container " style="display: inherit;vertical-align:top;">
                                                    <label id="">ID</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-lg-4 fb-field-container " style="min-height:26px">
                                                <div class="fb-inline-field-container form-line" style="display: inherit;vertical-align:top;;width: 50%">
                                                    <input class="form-control tfield tfield_disabled" widget="tentry" type="text" name="id" value="" style="width:100%;" id="" readonly="1" tabindex="-1" onmouseover="style.cursor=\'default\'">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-lg-2 fb-field-container  col-form-label control-label" style="min-height:26px">
                                                <div class="fb-inline-field-container " style="display: inherit;vertical-align:top;">
                                                    <label id="">Nome</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-lg-4 fb-field-container " style="min-height:26px">
                                                <div class="fb-inline-field-container form-line" style="display: inherit;vertical-align:top;;width: 100%">
                                                    <input class="form-control tfield" widget="tentry" type="text" required="" aria-required="true" name="nome" value="" style="width:100%;" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group tformrow row ">
                                            <div class="col-sm-4 col-lg-2 fb-field-container  col-form-label control-label" style="min-height:26px">
                                                <div class="fb-inline-field-container " style="display: inherit;vertical-align:top;">
                                                    <label id="">Data de Nascimento</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-lg-4 fb-field-container " style="min-height:26px">
                                                <div class="fb-inline-field-container form-line" style="display: inherit;vertical-align:top;;width: 100%">
                                                    <input class="form-control tfield" widget="tentry" type="date" required="" aria-required="true" name="dtNascimento" value="" style="width:100%;" id="" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-lg-2 fb-field-container  col-form-label control-label" style="min-height:26px">
                                                <div class="fb-inline-field-container " style="display: inherit;vertical-align:top;">
                                                    <label id="">Logradouro</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-lg-4 fb-field-container " style="min-height:26px">
                                                <div class="fb-inline-field-container form-line" style="display: inherit;vertical-align:top;;width: 100%">
                                                    <input class="form-control tfield" widget="tentry" type="text" name="logradouro" value="" style="width:100%;" id="">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group tformrow row ">
                                             <div class="col-sm-4 col-lg-2 fb-field-container  col-form-label control-label" style="min-height:26px">
                                                 <div class="fb-inline-field-container " style="display: inherit;vertical-align:top;">
                                                     <label id="">Numero</label>
                                                 </div>
                                             </div>
                                             <div class="col-sm-8 col-lg-4 fb-field-container " style="min-height:26px">
                                                 <div class="fb-inline-field-container form-line" style="display: inherit;vertical-align:top;;width: 100%">
                                                     <input class="form-control tfield" widget="tentry" type="number" name="numero" value="" style="width:100%;" id="">
                                                 </div>
                                             </div>
                                             <div class="col-sm-4 col-lg-2 fb-field-container  col-form-label control-label" style="min-height:26px">
                                                 <div class="fb-inline-field-container " style="display: inherit;vertical-align:top;">
                                                     <label id="">Cep</label>
                                                 </div>
                                             </div>
                                             <div class="col-sm-8 col-lg-4 fb-field-container " style="min-height:26px">
                                                 <div class="fb-inline-field-container form-line" style="display: inherit;vertical-align:top;;width: 100%">
                                                     <input class="form-control tfield" widget="tentry" type="number" name="cep" value="" style="width:100%;" id="" placeholder="_____-___">
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer card-footer" style="width: 100%">
                                <button id="tbutton_btn_salvar" name="btn_salvar" class="btn btn-sm btn-primary" onclick="Adianti.waitMessage = \'Carregando\';__adianti_post_data(\'class=ManualConnection&method=create\');return false;"" aria-label="Salvar">
                                    <span><i class="far fa-save" style=";padding-right:4px"></i>Salvar</span>
                                </button>
                                <button class="btn btn-sm btn-default" style="" href="index.php?class=SystemUserForm&amp;method=onEdit" generator="adianti"><i class="fa fa-eraser red"></i>Limpar</button>
                                <button class="btn btn-sm btn-default" style="" href="index.php?class=SystemUserList&amp;method=onReload" generator="adianti"><i class="far fa-arrow-alt-circle-left blue"></i>Voltar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>'));
    }
}
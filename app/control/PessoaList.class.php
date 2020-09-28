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
class PessoaList extends TPage
{
    public function __construct()
    {
        parent::__construct();
        parent::add(new TLabel('<div class="card panel" style="width: 100%" widget="bootstrapformbuilder" form="" id="">
    <div class="card-header panel-heading"><div class="panel-title card-title">Lista de Pessoas</div>
    </div>
    <form class="form-horizontal" type="bootstrap" novalidate="" enctype="multipart/form-data" name="" id="" method="post">
        <div class="card-body panel-body" style="width: 100%">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" style="padding:10px; margin-top: -1px;" id="">
                    <div class="form-group tformrow row ">
                        <div class="col-sm-4 col-lg-2 fb-field-container  col-form-label control-label" style="min-height:26px">
                            <div class="fb-inline-field-container " style="display: inherit;vertical-align:top;">
                                <label id="">Nome</label>
                            </div>
                        </div>
                        <div class="col-sm-8 col-lg-10 fb-field-container " style="min-height:26px">
                            <div class="fb-inline-field-container form-line" style="display: inherit;vertical-align:top;;width: 70%">
                                <input class="form-control tfield" widget="tentry" type="text" name="name" value="" style="width:100%;" id="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer card-footer" style="width: 100%">
            <button id="tbutton_btn_buscar" name="btn_buscar" class="btn btn-sm btn-primary" onclick="Adianti.waitMessage = \'Carregando\';__adianti_post_data(\'form_search_SystemUser\', \'class=SystemUserList&amp;method=onSearch\');return false;" aria-label="Buscar"><span>
                <i class="fa fa-search" style=";padding-right:4px"></i>
                Buscar</span>
            </button>
            <button id="tbutton_btn_novo" name="btn_novo" class="btn btn-default btn-sm" onclick="Adianti.waitMessage = \'Carregando\';__adianti_post_data(\'form_search_SystemUser\', \'class=SystemUserForm&amp;method=onEdit\');return false;" aria-label="Novo"><span>
                <i class="fa fa-plus green" style=";padding-right:4px"></i>
                Novo</span>
            </button>
        </div>
    </form>
</div>
    <table class="table table-striped table-hover" id="" type="bootstrap" style="width: 100%;border-collapse:collapse">
        <thead><tr>
            <th class="tdatagrid_action" style="padding:0" width="28px"><span style="min-width:calc(28px - 2px);display:block"></span></th>
            <th class="tdatagrid_action" style="padding:0" width="28px"><span style="min-width:calc(28px - 2px);display:block"></span></th>
            <th class="tdatagrid_col" style="text-align:center;user-select:none;cursor:pointer;" width="58px" href="index.php?class=SystemProgramList&amp;method=onReload&amp;order=id&amp;direction=asc" generator="adianti">Id</th>
            <th class="tdatagrid_col" style="text-align:left;user-select:none;cursor:pointer;" hiddable="500" href="index.php?class=SystemProgramList&amp;method=onReload&amp;order=name&amp;direction=asc" generator="adianti">Nome</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            
        </tr>
        </tbody>
    </table>
</div>'));
    }
}
<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#historial_kpi"><?= $this->lang->line('historial_kpi'); ?></a></li>
	<li class=""><a data-toggle="tab" href="#calificar_kpi"><?= $this->lang->line('calificar_kpi'); ?></a></li>
	<li class=""><a data-toggle="tab" href="#certificado"><?= $this->lang->line('certificado'); ?></a></li>
</ul>

<div class="tab-content">

	<div id="historial_kpi" class="tab-pane fade in active">
		<h3><?= $this->lang->line('hisotrico'); ?></h3>
		<table id="tableHistoricKpi" class="table table-bordered table-striped" width="100%">
			<thead>
				<th><?= $this->lang->line('proyecto'); ?></th>
				<th><?= $this->lang->line('califico'); ?></th>
				<th><?= $this->lang->line('fecha_evaluo'); ?></th>
				<th><?= $this->lang->line('valor_mes'); ?></th>
				<th><?= $this->lang->line('por_kpi'); ?></th>
			</thead>
		</table>
	</div>

	<div id="calificar_kpi" class="tab-pane fade">
		<h3><?= $this->lang->line('calificar'); ?></h3>
		<table id="tableServicios" class='table table-bordered table-striped' width='100%'></table>
	</div>

	<div id="certificado" class="tab-pane fade">
		<h3><?= $this->lang->line('certificado'); ?></h3>
	</div>


</div>

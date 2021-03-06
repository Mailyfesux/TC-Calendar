<div class="modal fade" id="eventViewModal" tabindex="-1" role="dialog" aria-labelledby="eventViewModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="view-event-form" class="form-horizontal" role="form" action="#">
				<input type="hidden" id="hidden_id" name="id">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="eventViewModalLabel"></h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class ="col-md-2 text-right">Start:</div>
						<div class ="col-md-8 text-left" id="eventViewStart"></div>
					</div>
					<div class="row">
						<div class ="col-md-2 text-right">End:</div>
						<div class ="col-md-8 text-left" id="eventViewEnd"></div>
					</div>
					<div class="row">
						<div class ="col-md-2 text-right">URL:</div>
						<div class ="col-md-8 text-left" id="eventViewURL"></div>
					</div>
					<div class="row">
						<div class ="col-md-2 text-right">All Day:</div>
						<div class ="col-md-8 text-left" id="eventViewAllday"></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<?php if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){?>
						<button type="submit" class="btn btn-primary">Edit</button>
					<?php } ?>
				</div>
			</form>
		</div>
	</div>
</div>
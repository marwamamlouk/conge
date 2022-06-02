<div class="row">
		          <div class="col-12 col-sm-6 col-md-3">
		            <div class="info-box">
		              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-bars"></i></span>
		              <div class="info-box-content">
		                <span class="info-box-text">Utilisateurs</span>
		                <span class="info-box-number">
		                  <small>{{ App\User::where('grade', '!=', 'admin')->count() }}</small>
		                </span>
		              </div>
		              <!-- /.info-box-content -->
		            </div>
		            <!-- /.info-box -->
		          </div>
		          <!-- /.col -->
		          <div class="col-12 col-sm-6 col-md-3">
		            <div class="info-box mb-3">
		              <span class="info-box-icon bg-danger elevation-1">
					  <i class="fa fa-smile-o"></i>
					  </span>
		              <div class="info-box-content">
		                <span class="info-box-text">Congés</span>
		                <span class="info-box-number">{{ App\Conge::count() }}</span>
		              </div>
		            </div>

		          </div>
		          <div class="clearfix hidden-md-up"></div>
		          <div class="col-12 col-sm-6 col-md-3">
		            <div class="info-box mb-3">
		              <span class="info-box-icon bg-success elevation-1">
					  <i class="fa fa-users"></i></span>
		              <div class="info-box-content">
		                <span class="info-box-text">Employés</span>
		                <span class="info-box-number">{{ App\Employe::count() }}</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-12 col-sm-6 col-md-3">
		            <div class="info-box mb-3">
					<!-- sorry for what I do hhh i said  -->
		              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-id-badge"></i></span>
		              <div class="info-box-content">
		                <span class="info-box-text">Secretaires</span>
		                <span class="info-box-number">{{ App\User::where('grade', 'secretaire')->count() }}</span>
		              </div>
		              <!-- /.info-box-content -->
		            </div>
		            <!-- /.info-box -->
		          </div>


		        </div>

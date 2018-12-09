{{-- {{dd('sx') }} --}}
@extends ('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Timeline
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">
                    <!-- timeline time label -->
                    <li class="time-label">
                        <span class="bg-red">10/12/2018</span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-exclamation bg-yellow"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 01/10/2018</span>
                            <h3 class="timeline-header"><a href="#">Anonimo
                                </a>
                            </h3>
                            <div class="box box-widget">
                                <div class="box-header with-border">
                                    <div class="user-block">
                                        <img class="img-circle" src="https://blog.maxieduca.com.br/wp-content/uploads/2016/12/002-anonimo.jpg" alt="User Image">
                                        <span class="username"><a href="#">Anonimo</a></span>
                                        <span class="description">01/10/2018</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <img class="img-responsive pad" src="https://scontent.xx.fbcdn.net/v/t1.15752-0/p280x280/47189885_2156023058048535_8072479771151302656_n.jpg?_nc_cat=107&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=6918bc9135af6abc9f5d62eb3e565e24&oe=5CAB2B88" alt="Photo">
                                    <p>Motorista de uma ambulância de Vitoria do Xingu transportando sacos de cimentos na transamazônica próximo a Altamira.
                                    </p>
                                </div>
                                <!-- /.box-body -->
                                <!-- /.box-footer -->
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-exclamation bg-yellow"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 01/10/2018</span>
                            <h3 class="timeline-header"><a href="#">Anonimo
                                </a>
                            </h3>
                            <div class="box box-widget">
                                <div class="box-header with-border">
                                    <div class="user-block">
                                        <img class="img-circle" src="https://adminlte.io/themes/AdminLTE/dist/img/user1-128x128.jpg" alt="User Image">
                                        <span class="username"><a href="#">Anonimo</a></span>
                                        <span class="description">01/10/2018</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <img class="img-responsive pad" src="https://adminlte.io/themes/AdminLTE/dist/img/photo2.png" alt="Photo">
                                    <p>Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts. Separated they live in Bookmarksgrove right at
                                    </p>
                                </div>
                                <!-- /.box-body -->
                                <!-- /.box-footer -->
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-exclamation bg-yellow"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 01/10/2018</span>
                            <h3 class="timeline-header"><a href="#">Anonimo
                                </a>
                            </h3>
                            <div class="box box-widget">
                                <div class="box-header with-border">
                                    <div class="user-block">
                                        <img class="img-circle" src="https://adminlte.io/themes/AdminLTE/dist/img/user1-128x128.jpg" alt="User Image">
                                        <span class="username"><a href="#">Anonimo</a></span>
                                        <span class="description">01/10/2018</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <img class="img-responsive pad" src="https://adminlte.io/themes/AdminLTE/dist/img/photo2.png" alt="Photo">
                                    <p>Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts. Separated they live in Bookmarksgrove right at
                                    </p>
                                </div>
                                <!-- /.box-body -->
                                <!-- /.box-footer -->
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                    </li>
                </ul>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
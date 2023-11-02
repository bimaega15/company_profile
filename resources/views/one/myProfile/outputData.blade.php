<div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <i class="zmdi zmdi-book-image"></i> My Profile
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <a href="{{ asset('upload/profile/'.UtilsHelp::myProfile()->profile->gambar_profile) }}" alt="{{ UtilsHelp::myProfile()->profile->gambar_profile }}" target="_blank">
                                                    <img src="{{ asset('upload/profile/'.UtilsHelp::myProfile()->profile->gambar_profile) }}" alt="{{ UtilsHelp::myProfile()->profile->gambar_profile }}" style="width: 100%;">
                                                </a>
                                            </div>
                                            <hr>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="d-flex flex-wrap justify-content-between">
                                                        <div>
                                                            NAMA:
                                                        </div>
                                                        <div>
                                                            {{UtilsHelp::myProfile()->profile->nama_profile}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex flex-wrap justify-content-between">
                                                        <div>
                                                            NIK:
                                                        </div>
                                                        <div>
                                                            {{UtilsHelp::myProfile()->profile->nik_profile}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex flex-wrap justify-content-between">
                                                        <div>
                                                            ROLE:
                                                        </div>
                                                        <div>
                                                            {{(implode(',', Auth::user()->getRoleNames()->toArray()))}}
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <i class="fa fa-pencil-alt"></i> Biodata
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div class="d-flex justify-content-between flex-wrap">
                                                        <div>Nama: </div>
                                                        <div>
                                                            {{ UtilsHelp::myProfile()->profile->nama_profile }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="d-flex justify-content-between flex-wrap">
                                                        <div>NIK: </div>
                                                        <div>
                                                            {{ UtilsHelp::myProfile()->profile->nik_profile }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div class="d-flex justify-content-between flex-wrap">
                                                        <div>Email: </div>
                                                        <div>
                                                            {{ UtilsHelp::myProfile()->profile->email_profile }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="d-flex justify-content-between flex-wrap">
                                                        <div>No. Handphone: </div>
                                                        <div>
                                                            {{ UtilsHelp::myProfile()->profile->nohp_profile }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div class="d-flex justify-content-between flex-wrap">
                                                        <div>Alamat: </div>
                                                        <div>
                                                            {{ UtilsHelp::myProfile()->profile->alamat_profile }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div class="d-flex justify-content-between flex-wrap">
                                                        <div>Jenis Kelamin: </div>
                                                        <div>
                                                            {{ UtilsHelp::myProfile()->profile->jeniskelamin_profile == 'L' ? "Laki-laki" : "Perempuan" }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
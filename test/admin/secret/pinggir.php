<?php include"secret/krispi.php";
?>
 <ul class="nav side-menu">
 <li>
              <a href="<?php echo"$datadashboard";?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>            </li>
			<li>
			<a href="<?php echo"$datamenuprofil";?>">
            <i class="fa fa-institution"></i> <span>Profil Instansi</span></a>            </li>
			
			
   <li>
              <a href="<?php echo"$datamenumatkul";?>">
            <i class="fa fa-graduation-cap"></i> <span>Pelatihan</span></a>            </li> 
			
			
		
                               
                                <li><a><i class="fa fa-question-circle"></i>Ujian <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo"$datamenusoal";?>">soal</a>
                                        </li>
                                        <li><a href="<?php echo"$datamenudujian";?>">data ujian</a>
                                        </li>
                                        <li><a href="<?php echo"$datamenuujian";?>">setting ujian</a>
                                        </li>
                                    </ul>
                                </li>
                               <li>
			<a href="<?php echo"$datamenunilai";?>">
            <i class="fa fa-server"></i> <span>Rekap Nilai</span></a>            </li> 
			
			<li>
			<a href="<?php echo"$datamenuusergarap";?>">
            <i class="fa fa-users"></i> <span>Daftar Peserta</span></a>            </li>
			
            <li><a><i class="fa fa-user"></i>Pengaturan Admin <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo"$datamenuuseradmin";?>">Ubah biodata</a>
                                        </li>
                                        <li><a href="<?php echo"$datamenuuserfoto";?>">Ubah foto</a>
                                        </li>
                                        <li><a href="<?php echo"$datamenuuserpassword";?>">Ubah Password</a>
                                        </li>
                                    </ul>
                                </li> 
                            </ul>
							
							
<body>
<br></br>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4c70af;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        caption {
            margin-bottom: 10px;
            font-size: 1.5em;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="col-sm-6">
          <div class="form-group">
                  <label>Санаро дохил кунед:</label>
                  <form method="POST">
                  
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
        <input type="text" name="selSana" class="form-control datetimepicker-input" data-target="#reservationdate">
        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
    </div>
                  <div class="form-group">
                        <label>Фанро интихоб кунед:</label>
                      
                          <select name="selFan"class="form-control"> 
                            <option value="0" disabled selected>Фанни...</option>
                              <?php if(isset($dtProblem)) {
                                foreach($dtProblem as $v) { ?>
                                <option value=" "><?=$v['subject_name'];?></option>
                                <?php  }
                                  }
                                ?>  
                            </select>
                             
     
                          </div>
                        <div class="form-group">
                        <label>Синфро интихоб кунед:</label>
                        
                          <select name="selSinf"class="form-control"> 
                            <option value="0" disabled selected>Синфи...</option>
                              <?php if(isset($sinfProblem)) {
                                foreach($sinfProblem as $v) { ?>
                                <option value="<?=$v['id'];?>"><?=$v['class'];?></option>
                                <?php  }
                                  }
                                ?>  
                            </select>
                            <br></br>
                            <button type="submit" class="btn btn-block btn-dark" name='btnAdd' value="btnAdd"><b>Интихобкунӣ</b></button>
                            </form> 
     
                          </div>
                        </div>
         
                  </div>
                </div><!-- /.container-fluid -->
              </section>

<table>
    <caption>Варақаи баҳо</caption>
    <thead>
        <tr>
            <th>№</th>
            <th> Ному насаб</th>
            <?php if(isset($cdata)) {
                              for($i=0;$i<count($cdata);++$i){ ?>
            
            <th><?=$i['date'];?></th>
            <?php } }
            else {
                echo 'asdfghj';
            
                           }
             ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$i+1 ?></td>
            <td><?=$nomNasabProblem[$i]['id_student'] ?></td>
            <td><?=$fanProblem[0]['id_fan']?></td>
        </tr>
     
    </tbody>
</table>




    <!-- Main content -->
                  

<a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   


<!-- JavaScript Libraries -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<style>

@import url("<?=base_url()?>lib/wow/wow.min.js");
@import url("<?=base_url()?>lib/easing/easing.min.js");
@import url("<?=base_url()?>lib/waypoints/waypoints.min.js");
@import url("<?=base_url()?>lib/counterup/counterup.min.js");
@import url("<?=base_url()?>lib/owlcarousel/owl.carousel.min.js");
</style>


<!-- Template Javascript -->
<script src="<?=base_url()?>js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="<?=$base_url?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=$base_url?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?=$base_url?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TL SOLUTIONS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Lista de productos</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Administrador</span>
                                <img class="img-profile rounded-circle"
                                    src="https://image.freepik.com/vector-gratis/silueta-hombre-estilo-hipster_1020-452.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Listado de stock de productos</h1>
                        <div class="row" style="justify-content: flex-start">
                         <div class="" style="   " >
                            <button data-toggle="modal" data-target="#modal_producto" type="button" class=" btn btn-success" >           
                            agregar producto</button>&nbsp&nbsp&nbsp
                            <button data-toggle="modal" data-target="#modal_proveedor" type="button" class=" btn btn-success" >           
                            agregar proveedor</button>
                            <button data-toggle="modal"  data-target="#modal_actualizar_producto" type="button" class="btn btn-success">Actualizar</button>
                            <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_proveedor"><button type="button" class="btn btn-success">           
                            agregar proovedor</button></a> -->
                         </div>
                        </div>
                        <!-- <button type="button" class="btn btn-success">agregar producto</button> -->
                        

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nro</th>
                                            <th>Nombre </th>
                                            <th>categoria </th>
                                            <th>precio unitario</th>
                                            <th>Total</th>
                                            <th>opciones</th>
                                           
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Nro</th>
                                            <th>Nombre del producto</th>
                                            <th>categoria</th>
                                            <th>precio</th>
                                            <th>Stock</th>
                                            <th>proveedor</th>
                                            <th>ingreso</th>
                                            <th>salida</th>
                                            <th>opciones</th>
                                         
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                <?php foreach($producto as $recor_producto){?>
                                        <tr>
                                            <td><?= $recor_producto['Id_producto'] ?></td>
                                            <td><?= $recor_producto['Nom_producto'] ?></td>
                                            <td><?= $recor_producto['nom_categoria'] ?></td>
                                            <td>S/<?= $recor_producto['Precio_prod'] ?></td>
                                            <td><?= $prueba= $recor_producto['Cant_prod']?></td>                                            
                                            <td>
                                                <!-- <button data-toggle="modal" data-target="#modal_stock_producto" type="button" class=" btn btn-info" >detalle</button>                                                 -->
                                                <!-- <a href="editData/<?= $recor_producto['Id_producto'] ?>"><i class="far fa-edit"></i>eliminar</a> -->
                                                <!-- <button style="border: none; background-color: transparent; color: #007bff;" onclick="deleteProduct(<?=$recor_producto['Id_producto']?>)"><i class="fas fa-trash-alt"></i></button> -->
                                                
                                                <button style="border: none; background-color: transparent; color: #007bff;"id="detalle-producto" idse="<?=$recor_producto['Id_producto']?>"><i class="fas fa-book"></i></button>
                                                <button style="border: none; background-color: transparent; color: #007bff;"id="editar-producto" idsec="<?=$recor_producto['Id_producto']?>"><i class="fas fa-edit"></i></button>
                                                <button style="border: none; background-color: transparent; color: #007bff;"id="eliminar-producto" ids="<?=$recor_producto['Id_producto']?>"><i class="fas fa-trash-alt"></i></button>
                                                <!-- <button type="button" class="btn btn-danger">eliminar</button> -->
                                            </td>
                                            
                                        </tr>
                                <?php }?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content modal-lg-12">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal para agregar proveedor -->
    <div  class="modal  fade fullscreen-modal" id="modal_proveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" >
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content modal-lg">
                <form action="producto/add_nuevo_proveedor" method="POST" role="form" class="form-horizontal">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar proveedor</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="  container">
                            <div class="row ">
                                <div class="col-lg-6">
                                    <div class="form-group  row">
                                        <div class="col-3">
                                            <label for="add_name"  class="col-sm-2 col-form-label">NOMBRE:</label>
                                        </div>
                                        <div class="col-9">
                                            <input type="text"  class="form-control-plaintext"name="add_name" id="add_name" placeholder="agregar">
                                        </div>
                                    </div>
                                    <div class="form-group  row">
                                        <div class="col-3">
                                            <label for="add_dni" class="col-sm-2 col-form-label">DNI:</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="text"  class="form-control-plaintext"name="add_dni" id="add_dni" placeholder="agregar">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-3">
                                            <label for="add_email" class="col-sm-2 col-form-label">EMAIL:</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="text"  class="form-control-plaintext"name="add_email" id="add_email" placeholder="agregar">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-3">
                                            <label for="add_razon_social" class="col-sm-2 col-form-label">RAZON SOCIAL:</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="text"  class="form-control-plaintext"  name="add_razon_social"id="add_razon_social" placeholder="agregar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-3">
                                            <label for="add_ruc"  class="col-sm-2 col-form-label">RUC:</label>
                                        </div>
                                        <div class="col-9.8">
                                            <input type="text"  class="form-control-plaintext" name="add_ruc" id="add_ruc" placeholder="agregar">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-3.1">
                                            <label for="add_telefono" class="col-sm-2 col-form-label">TELEFONO: </label>
                                        </div>
                                        <div class="col-6">
                                            <input type="text"  class="form-control-plaintext" name="add_telefono" id="add_telefono" placeholder="agregar">
                                        </div>
                                    </div>
                                </div>
                            </div>             
                        </div>                 
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"id="send_proveedor">Guardar</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal para agregar producto -->
    <div  class="modal  fade fullscreen-modal" id="modal_producto" tabindex="-1" role="dialog" aria-labelledby="modal_producto"
        aria-hidden="true" >
        <div class="modal-dialog modal-xl " role="document">
            <div class="modal-content modal-lg">
                <form action="producto/add_nuevo_producto" method="POST" role="form" class="form-horizontal">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_producto">Agregar producto</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="  container">
                            <div class="row ">
                                <div class="col-lg-6">
                                    <div class="form-group  row">
                                        
                                        <label for="add_nombre"  class="col-sm-6 col-form-label">Nombre:</label>
                                        
                                        <div class="col-6">
                                            <input type="text"  class="form-control-plaintext"name="add_nombre" id="add_nombre" placeholder="agregar">
                                        </div>
                                    </div>
                                    <div class="form-group  row">
                                        
                                        <label for="add_precio" class="col-sm-6 col-form-label">Precio:</label>
                                        
                                        <div class="col-6">
                                            <input type="text"  class="form-control-plaintext"name="add_precio" id="add_precio" placeholder="agregar">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        
                                        <label for="add_cantidad"  class="col-sm-6 col-form-label">Cantidad:</label>
                                        
                                        <div class="col-6">
                                            <input type="text"  class="form-control-plaintext" name="add_cantidad" id="add_cantidad" placeholder="agregar">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        
                                        <label for="add_marca"  class="col-sm-6 col-form-label">MARCA:</label>
                                        
                                        <div class="col-6">
                                            <select id="add_marca" name="add_marca"class="form-select" aria-label="Default select example">
                                              <option selected>ELIGE OPCION</option>
                                              <option value="1">TRU.VISIONS</option>
                                              <option value="2">TOR.VISION </option>
                                              <option value="3">ZEN.VISION</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        
                                        <label for="add_proveedor"  class="col-sm-6 col-form-label">PROVEEDOR:</label>
                                       
                                        <div class="col-6">
                                            <select id="add_proveedor" name="add_proveedor"class="form-select" aria-label="Default select example">
                                              
                                              <option selected>ELIGE LA OPCION</option>
                                                <?php
                                                foreach ($lista_provedor as $lista_provedors) {
                                                ?>
                                                <option value="<?= $lista_provedors['Id_proveedor']?>"><?= $lista_provedors['Nom_proveedor']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        
                                        <label for="add_ubicacion"  class="col-sm-6 col-form-label">UBICACION:</label>
                                        
                                        <div class="col-6">
                                            <select id="add_ubicacion" name="add_ubicacion"class="form-select" aria-label="Default select example">
                                              <option selected>ELEGIR OPCION</option>
                                              <option value="1">ESTANTE 1</option>
                                              <option value="2">ESTANTE 2 </option>
                                              <option value="3">ESTANTE 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        
                                        <label for="add_categoria"  class="col-sm-6 col-form-label">CATEGORIA:</label>
                                        
                                        <div class="col-6">
                                            <select id="add_categoria" name="add_categoria"class="form-select" aria-label="Default select example">
                                              <option selected>ELEGIR OPCION</option>
                                              <option value="HERRAMIENTA">HERRAMIENTA</option>
                                              <option value="PRODUCTO">PRODUCTO </option>
                                            </select>
                                        </div>
                                    </div>


                                </div>

                                    <div class="form-group shadow-textarea">
                                       <label for="add_descripcion">DESCRIPCION</label>
                                        <textarea class="form-control z-depth-1" id="add_descripcion" name="add_descripcion" cols="70"rows="3" placeholder="Escribir aca..."></textarea>
                                    </div>
                            </div>             
                        </div>                 
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"id="send_producto">Guardar</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal  fade fullscreen-modal" id="modal_stock_producto" tabindex="-1" role="dialog" aria-labelledby="modal_stock_producto"  aria-hidden="true" >
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content modal-lg-12">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalle de productos</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre </th>
                                <th>categoria </th>
                                <th>Proveedor</th>
                                <th>Stock</th>
                                <th>Ingreso</th>
                                <th>Salida</th>
                               
                            </tr>
                        </thead>                                   
                        <tbody>
                            <?php foreach($producto as $recor_producto){?>
                                <tr>
                                    <td><?= $recor_producto['Id_producto'] ?></td>
                                    <td><?= $recor_producto['Nom_producto'] ?></td>
                                    <td><?= $recor_producto['nom_categoria'] ?></td>
                                    <td>S/<?= $recor_producto['Precio_prod'] ?></td>
                                    <td><?= $prueba= $recor_producto['Cant_prod']?></td>                                            
                                    <td>hola</td>
                                    <td>hola</td>
                                    
                                </tr>
                            <?php }?>  
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal  fade fullscreen-modal" id="modal_actualizar_producto" tabindex="-1" role="dialog" aria-labelledby="modal_actualizar_producto"  aria-hidden="true" >
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content modal-lg-12">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar de productos</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                   <div>
                        producto<select>     
                            <?php foreach($producto as $recor_producto){?>                                
                              <option value='<?= $recor_producto["Id_producto"] ?>'><?= $recor_producto["Nom_producto"] ?></option>  
                            <?php }?>
                        </select>  <br><br>
                        proveedor
                        <select>
                            <option>provedor 1</option>
                        </select><br><br>
                       <label>cantidad a agregar</label>
                       <input type="number" name=""> <button id="agregar_producto" onclick="agregar__producto()" class="btn btn-secondary" type="">agregar</button><br><br>
                       <label>cantidad a quitar</label> 
                       <input type="number" name="">  <button id="quitar_producto" onclick="quitar__producto()" class="btn btn-secondary" type="">quitar</button>
                      
                   </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- modal para editar producto -->
    <div class="modal fade fullscreen-modal " id="modal_ventana" tabindex="-1" role ="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDITAR PRODUCTO</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="producto/edit_producto" id="form_edit_listaproducto" method="POST" role="form" class="form-horizontal">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="edit_nomproducto"  class="col-sm-4 col-form-label">Nombre:</label>
                                    <div class="col-8">
                                        <input type="text"  class="form-control-plaintext"name="edit_nomproducto" id="edit_nomproducto" value="" placeholder="agregar">
                                    </div>                                
                                </div>
                                <div class="form-group row">
                                    <label for="edit_cantproducto"  class="col-sm-8 col-form-label">cantidad de producto:</label>
                                    <div class="col-sm-4">
                                        <input type="text"  class="form-control-plaintext"name="edit_cantproducto" id="edit_cantproducto" value="" placeholder="agregar">
                                    </div>                                
                                </div>
                                <div class="form-group row">
                                    <label for="edit_descproducto"  class="col-sm-8 col-form-label">descripcion del producto:</label>
                                    <div class="col-sm-4">
                                        <input type="text"  class="form-control-plaintext"name="edit_descproducto" id="edit_descproducto" value="" placeholder="agregar">
                                    </div>                                
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="edit_preproducto"  class="col-sm-8 col-form-label">Precio:</label>
                                    <div class="col-9">
                                        <input type="text"  class="form-control-plaintext"name="edit_preproducto" id="edit_preproducto" placeholder="agregar">
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <button type="button" id="btn_guardar_editar" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?=$base_url?>vendor/jquery/jquery.js"></script>
    <script src="<?=$base_url?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=$base_url?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=$base_url?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=$base_url?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=$base_url?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Page level custom scripts -->
    <script src="<?=$base_url?>js/demo/datatables-demo.js"></script>
    <script type="text/javascript">
        // function agregar__producto(evento) {
        //     event.preventDefault();
            
        //   }
        $(document).on('click','#eliminar-producto',function(e){ 
            var Id_producto=$(this).attr("ids");
            Swal.fire({
            title:"¿Estás seguro de que deseas eliminar este producto?",
            //text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminalo!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                url:'producto/deleteProduct',
                method:'post',
                data:{
                    Id_producto:Id_producto
                }
            }).then(() => {
            location.reload()
            })
            // .done(function(response){
            //     console.log(response);
            //     Swal.fire(               
            //     'success'
            //     )
            // });
            }
            })
           
        });  
        $(document).on('click','#editar-producto',function(e){
            e.preventDefault(); 
            var Id_producto =$(this).attr("idsec");            
            $.ajax({
    		type: 'post',
            url:"producto/traer_datos_modal_editarproducto",                               
            data: 
            {
            	Id_producto:Id_producto
            }
            }).done(function(respuesta){
                var content = JSON.parse(respuesta);
                console.log(respuesta)
                // alert(content[0].Nom_producto)
                // console.log(respuesta[0].Nom_producto); edit_descproducto              
                $('#form_edit_listaproducto input[id=edit_nomproducto]').val(content[0].Nom_producto);
                $('#form_edit_listaproducto input[id=edit_preproducto]').val(content[0].Precio_prod);
                $('#form_edit_listaproducto input[id=edit_cantproducto]').val(content[0].Cant_prod);
                $('#form_edit_listaproducto input[id=edit_descproducto]').val(content[0].Descripcion);
            $('#modal_ventana').modal();
            });
        });  

        $(document).on('click','#editar-producto',function(e){

        });
    </script>

</body>

</html>
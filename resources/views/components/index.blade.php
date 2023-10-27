@include('head')
@include('layouts.navbar')
@include('layouts.sidebar')

<div class="content-wrapper">



  <div class="fixed-table-toolbar"><div class="columns columns-right btn-group pull-right">
    <div class="pull-right search input-group">
        <div class="input-group">
          <input class="form-control search-input" type="search" aria-label="Search" placeholder="Search" 
          autocomplete="off"><span class="input-group-btn">
              <button class="btn btn-default" type="button" name="clearSearch" title="Clear Search">
              <i class="fa fa-times"></i> </button></span>
         </div>
      </div>
    <button class="btn btn-default" type="button" name="refresh" aria-label="Refresh" title="Refresh"><i class="fa fas fa-sync-alt"></i> 
    </button>
    <button class="btn btn-default" type="button" name="fullscreen" aria-label="Fullscreen" title="Fullscreen"><i class="fa fa-expand"></i> 
    </button><div class="keep-open btn-group">
    
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-label="Columns" title="Columns">
    <i class="fa fa-columns"></i>
    
    <span class="caret"></span>
    </button>
        <div class="export btn-group">
        <button class="btn btn-default dropdown-toggle" aria-label="Export data" data-toggle="dropdown" type="button" title="Export data">
        <i class="fa fa-download"></i>
        
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
      <li role="menuitem" class="" data-type="xlsx"><a href="#">MS-Excel (OpenXML)</a></li><li role="menuitem" class="" data-type="excel"><a href="#">MS-Excel</a></li><li role="menuitem" class="" data-type="csv"><a href="#">CSV</a></li><li role="menuitem" class="" data-type="pdf"><a href="#">PDF</a></li><li role="menuitem" class="" data-type="json"><a href="#">JSON</a></li><li role="menuitem" class="" data-type="xml"><a href="#">XML</a></li><li role="menuitem" class="" data-type="txt"><a href="#">TXT</a></li><li role="menuitem" class="" data-type="sql"><a href="#">SQL</a></li><li role="menuitem" class="" data-type="doc"><a href="#">MS-Word</a></li></ul></div></div>

</div>
  <div class="row">
    <div class="col-md-12">
  
      <div class="box box-default">
        <div class="box-body">
          <div class="table-responsive">
    <table class="table table-hover table-bordered ">
        <thead>
          <tr>
            
            <th scope="col">No</th>
            <th scope="col">name</th>
            <th scope="col">Serial</th>
            <th scope="col">Category</th>
            <th scope="col">Licensed to</th>
            <th scope="col">Location</th>
            <th scope="col">Checkout</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
            <td scope="col">1</td>
            <td scope="col">Microsoft Azure</td>
            <td scope="col">F56FG</td>
            <td scope="col">Azure Licence</td>
            <td scope="col">Abas</td>
            <td scope="col">Meeting Room</td>
            <td>
                <button type="button" class="btn btn-sm bg-maroon">Checkout</button> 
            </td>
            <td>
                <a href="#"
                class="actions btn btn-sm btn-info" data-tooltip="true" title="Clone Item">
                <i class="far fa-clone" aria-hidden="true"></i>
                <span class="sr-only">clone</span>
                </a>
                <a href="#"
                class="actions btn btn-sm btn-warning" data-tooltip="true" title="Update Item">
                <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                <span class="sr-only">Update</span>
                </a>
                <a href="#"
                class="actions btn btn-danger btn-sm delete-asset" data-tooltip="true" title="Delete Item">
                <i class="fas fa-trash" aria-hidden="true"></i>
                <span class="sr-only">Delete</span>
                </a>
            </td>
            
            
          </tr>
          <tr>
            
            <td scope="col">2</td>
            <td scope="col">Fortisiem</td>
            <td scope="col">6D8FJS</td>
            <td scope="col">Fortinet</td>
            <td scope="col">SOC</td>
            <td scope="col">NSOC ROOM</td>
            <td>
                <button type="button" class="btn btn-sm bg-maroon">Checkout</button> 
            </td>
            <td>
                <a href="#"
                class="actions btn btn-sm btn-info" data-tooltip="true" title="Clone Item">
                <i class="far fa-clone" aria-hidden="true"></i>
                <span class="sr-only">clone</span>
                </a>
                <a href="#"
                class="actions btn btn-sm btn-warning" data-tooltip="true" title="Update Item">
                <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                <span class="sr-only">Update</span>
                </a>
                <a href="#"
                class="actions btn btn-danger btn-sm delete-asset" data-tooltip="true" title="Delete Item">
                <i class="fas fa-trash" aria-hidden="true"></i>
                <span class="sr-only">Delete</span>
                </a>
            </td>
          </tr>
          <tr>
            <td scope="col">3</td>
            <td scope="col">Sip Phone</td>
            <td scope="col">ASDF6788</td>
            <td scope="col">Avaya CM</td>
            <td scope="col">Ceaser</td>
            <td scope="col">Avaya Dept</td>
            <td>
                <button type="button" class="btn btn-sm bg-maroon">Checkout</button> 
            </td>
            <td>
                <a href="#"
                class="actions btn btn-sm btn-info" data-tooltip="true" title="Clone Item">
                <i class="far fa-clone" aria-hidden="true"></i>
                <span class="sr-only">clone</span>
                </a>
                <a href="#"
                class="actions btn btn-sm btn-warning" data-tooltip="true" title="Update Item">
                <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                <span class="sr-only">Update</span>
                </a>
                <a href="#"
                class="actions btn btn-danger btn-sm delete-asset" data-tooltip="true" title="Delete Item">
                <i class="fas fa-trash" aria-hidden="true"></i>
                <span class="sr-only">Delete</span>
                </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
</div>
</div>
</div>
      </div>
      <!-- /.content-wrapper -->
      
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
</div>
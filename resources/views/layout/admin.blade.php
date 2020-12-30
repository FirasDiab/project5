@extends('layout.admin_main')
@section('main')



<div class="card" style="width:90%">
                                                    <div class="card-header">
                                                    
                                                     
                                                        <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                                                            <div class="card-header-right">
                                                                <i class="icofont icofont-spinner-alt-5"></i>
                                                            </div>

                                                        </div>
                                                        <div class="card-block">
                                                            <h4 class="sub-title">Add admin</h4>
                                                            <form>
                                                             
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Admin name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" placeholder="Type your title in Placeholder">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Admin Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="password" class="form-control" placeholder="Password input">
                                                                    </div>
                                                                </div>
                                                              
                                                               
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Admon email
                                                                        </label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" value="Enter yout content after me">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">role</label>
                                                                        <div class="col-sm-10">
                                                                            <select name="select" class="form-control">
                                                                                <option value="opt1">Select One Value Only</option>
                                                                                <option value="opt2">Type 2</option>
                                                                               
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    
                                                                       
                                                                            
                                                                            </div>
                                                                           
                                                                          

                                                                            </div>
                                                                        </form>
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                              
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-6 mobile-inputs">
                                                                               
                                                                              
                                                                            </div>
                                                                            <div class="col-sm-6 mobile-inputs">
                                                                               
                                                                             
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Username</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                                                @endsection
</body>
</html>

<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="LoginModalLabel">Accedi</h5>
                 <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
             <!-- qui va messo il form  -->
                 <form action="login.php" method="post">

                     <div class="form-group">
                         <label for="exampleInputPassword1">Email</label>
                         <input type="Email" class="form-control" name="EmailLogin" id="LoginEmail" placeholder="Email">
                         <label class="text-danger" id="wr"></label>
                     </div>
                     <div class="form-group">
                         <label for="exampleInputPassword1">Password</label>
                         <input type="password" class="form-control" name="PasswordLogin" id="LoginPassword" placeholder="Password">
                         <label class="text-danger" id="wr1"></label>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

             </div>
         </div>
     </div>
 </div>







 <div class="modal fade" id="RegistrationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                 <button type="button" class="btn-close button-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <!-- qui va messo il form  -->
                 <form action="./registrazione.php" method="post">
                    
                     <div class="mb-3">
                         <label class="form-label">Username</label>
                         <input type="Text" class="form-control" name="Username" id="Cognome"
                             aria-describedby="emailHelp" required>
                             <label class="text-danger" id="wr3"></label>

                     </div>
                    <div class="mb-3">
                         <label class="form-label">Email</label>
                         <input type="Text" class="form-control" name="Email" id="Email"
                             aria-describedby="emailHelp" required>
                             <label class="text-danger" id="wr4"></label>

                     </div>
                     <div class="mb-3">
                         <label class="form-label">Password</label>
                         <input type="password" class="form-control" name="Password" id="Password" required>
                         <label class="text-danger" id="wr5"></label>
                     </div>
                     <div class="mb-3">
                         <label class="form-label">Conferma Password</label>
                         <input type="password" class="form-control" name="ConfermaPassword" id="ConfermaPassword"
                             required>
                             <label class="text-danger" id="wr6"></label>
                     </div>

                

                     <button type="submit" name="create" class="btn btn-primary">Submit</button>
                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
             </div>

         </div>
     </div>
 </div>


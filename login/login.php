
        <div class="content-body"><section class="flexbox-container">
                <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header no-border">
                            <div class="card-title text-xs-center">
                                <div class="p-1"></div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>لوحة التحكم</span></h6>
                        </div>
                        <script>
                            function ca()
                            {
                               var name =  document.getElementById("user-name");
                               var pass = document.getElementById("user-password");

                                name.innerHTML = '';

                            }
                        </script>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <form class="form-horizontal form-simple" action="index.php" >
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <input type="text" value="fdf" class="form-control form-control-lg mb-1" id="user-name" placeholder="اسم المستخدم" required>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="password" value="fdf" class="form-control form-control-lg " id="user-password" placeholder="كلمه السر" required>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> دخول</button>
                                </form>
                                <button type="submit"  onclick="ca()" class="btn btn-blue btn-lg btn-block"><i class="icon-unlock2"></i>الغاء</button>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="">
                                <p class="float-sm-left text-xs-center m-0"><a href="" class="card-link">Recover password</a></p>
                                <p class="float-sm-right text-xs-center m-0">New to Robust? <a href="" class="card-link">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>


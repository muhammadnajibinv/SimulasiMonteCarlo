<div class="page-content--bgf7">

    <!-- DATA TABLE-->
    <form action="home.php?p=random-number" method="post">
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 pt-5">
                        <h3 class="title-5 m-b-35">Generate Random Number</h3>
                        <div class="card">
                            <div class="card-header">Multiplicative Mixed Congruent Method</div>
                            <div class="card-body">
                                <a href="#">
                                    <img src="../images/icon/rumus.png" alt="Rumus" style="max-width: 60%;" image>
                                </a>
                                <div class="form-group">
                                    <label for="a" class="control-label mb-1">a</label>
                                    <input id="a" name="a" type="number" class="form-control" Required value="19">
                                </div>
                                <div class="form-group has-success">
                                    <label for="z" class="control-label mb-1">z</label>
                                    <input id="z" name="z" type="number" class="form-control" Required value="20">
                                </div>
                                <div class="form-group">
                                    <label for="c" class="control-label mb-1">c</label>
                                    <input id="c" name="c" type="number" class="form-control" Required value="24">
                                </div>
                                <div class="form-group">
                                    <label for="m" class="control-label mb-1">m</label>
                                    <input id="m" name="m" type="number" class="form-control" Required value="99">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-lg btn-info btn-block" name="generate">
                                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                                        <span>Generate</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <!-- END DATA TABLE-->
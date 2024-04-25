<div class="container-fluid">
                <div class="row" style="display: flex; justify-content: center">
                    <div class="col-lg-3 col-md-7 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">New Order</h4>
                            </div>
                            <div class="content">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Payment Mode:</label>
                                                <select class="form-control border-input">
                                                    <option value="-1">Select Payment Mode</option>
                                                    <option value="1">Mobile Money</option>
                                                    <option value="2">Bank Transfer</option>
                                                    <option value="3">Cash</option>
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Transaction ID:</label>
                                                <input type="text" class="form-control border-input"  placeholder="Transaction ID" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="mnumber">Mobile Money / Account Number:</label>
                                                <input type="number" name="mnumber" id="mnumber" class="form-control border-input" placeholder="Number">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Amount:</label>
                                                <input type="text" class="form-control border-input" placeholder="Payment amount" value="">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Note:</label>
                                                <textarea rows="5" class="form-control border-input" placeholder="General comments about this order" value=""></textarea>
                                            </div>
                                        </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Sales</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
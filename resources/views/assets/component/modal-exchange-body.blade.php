<div class="action-sheet-content">
    <form>
        <div class="row">
            <div class="col-6">
                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="currency1">From</label>
                        <select class="form-control custom-select" id="currency1">
                            <option value="1">EUR</option>
                            <option value="2">USD</option>
                            <option value="3">AUD</option>
                            <option value="4">CAD</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="currency2">To</label>
                        <select class="form-control custom-select" id="currency2">
                            <option value="1">USD</option>
                            <option value="1">EUR</option>
                            <option value="2">AUD</option>
                            <option value="3">CAD</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group basic">
            <div class="input-wrapper">
                <label class="label" for="send3">ใส่จำนวนเงิน</label>
                <div class="exchange-group small">
                    <div class="input-col">
                        <input type="text" class="form-control form-control-lg pe-0" id="send3"
                            placeholder="0" value="0" maxlength="14">
                    </div>
                    <div class="select-col">
                        <select class="form-select form-select-lg currency" id="send3">
                            <option value="THB" selected>THB</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>



        <div class="form-group basic">
            <button type="button" class="btn btn-primary btn-block btn-lg"
                data-bs-dismiss="modal">Exchange</button>
        </div>
    </form>
</div>
<template>
    <div class="container-fluid">
        <aside class="content1">
            <div class="childcontent1">
                <div class="btn card Cashier1">Cashier1</div>
                <div class="btn card Cashier2">Cashier2</div>
                <div class="btn card FinanceAssesor1">FinanceAssesor1</div>
                <div class="btn card FinanceAssesor2">FinanceAssesor2</div>
                <div class="btn card Finish">Finish</div>
                <div class="btn card Start">Start</div>
            </div>
        </aside>
        <div class="content2">
            <div class="card">
                <div class="childcontent2">
                    <div class="navchildcontent2">
                        <h2>Cashier1</h2>

                        <div class="btn-group dropdown">
                            <button
                                type="button"
                                class="btn btn-secondary dropdown-toggle"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                Status
                            </button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Onbreak</a>
                                <a class="dropdown-item" href="#">Currently Serve</a>
                            </div>
                        </div>
                    </div>

                    <div class="contentchildcontent2">
                        <div class="card content2child2">
                            <h3>Now Serving</h3>
                            <h1>1</h1>
                        </div>

                        <div class="footerchildcontent2">
                            <h4>Status:</h4>
                            <h2>Currently Serving</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="content3">
            <div class="childcontent3">
                <div class="caption">Pending QUEUE</div>
                <div class="tablecontent">
                    <table class="table caption-top">
                        <thead>
                            <tr>
                                <td>0</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                            </tr>

                            <tr>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>4</td>
                            </tr>

                            <tr>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </aside>
    </div>
</template>
<style scoped>
@import "/resources/css/cashier/cashier.css";
</style>

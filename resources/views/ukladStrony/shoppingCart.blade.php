<h1 class="my-4">Koszyk</h1>
<!-- ko if: products().length == 0 -->
<center>Pusty</center>
<!-- /ko -->
<!-- ko ifnot: products().length == 0 -->
<table class="table">
    <thead>
    <tr class="table-hover table-bordered " bgcolor="#6495ed">
        <th>Produkt</th>
        <th>Ilość</th>
        <th>+</th>
        <th>-</th>
        <th>Usuń</th>
    </tr>
    </thead>
    <tbody class="" data-bind="foreach: products()">
    <tr class="table-hover table-bordered" bgcolor="ffebcd">
        <td data-bind="text: name"></td>
        <td data-bind="text: qt"></td>
        <td data-bind="click: increaseQt()">+</td>
        <td data-bind="click: decreaseQt()">-</td>
        <td data-bind="click: $parent.removeFromCart"><button class="btn btn-dark">Usuń</button></td>
    </tr>
    </tbody>
</table>
<center><a href="#Work_in_progress"><button class="btn btn-dark">Przejdź do kasy</button></a></center>
<!-- /ko -->
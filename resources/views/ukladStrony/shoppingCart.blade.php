<h1 class="my-4">Koszyk</h1>
<!-- ko if: products().length == 0 -->
<center>Twój koszyk jest pusty.</center>
<!-- /ko -->
<!-- ko ifnot: products().length == 0 -->
<table class="table">
    <thead>
    <tr>
        <th>Nazwa</th>
        <th>Ilość</th>
        <th>+</th>
        <th>-</th>
        <th>x</th>
    </tr>
    </thead>
    <tbody class="" data-bind="foreach: products()">
    <tr>
        <td data-bind="text: name"></td>
        <td data-bind="text: qt"></td>
        <td data-bind="click: increaseQt()">+</td>
        <td data-bind="click: decreaseQt()">-</td>
        <td data-bind="click: $parent.removeFromCart">X</td>
    </tr>
    </tbody>
</table>
<center><a href="#Work_in_progress"><button class="btn btn-primary">Przejdź do kasy</button></a></center>
<!-- /ko -->
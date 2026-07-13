# A simple PHP program - example 3

Notice this line below

```php
<h1>Welcome <?= $name ?> <?= $surname ?></h1>
```

Here we use a special PHP instruction. The `<?=` means: echo the value given . It is closed with `?>` as usual.

So whitin `<?= .... ?>` we can use expressions. For instance call a function to convert the current date and time
to a readable text:

```php
<p>
    Today is <?= date("l, j M Y") ?>.
</p>
```

or do calculations

```php
<p>
    283 times 4937 = <?= 283 * 4937 ?>
</p>
```

or use a decision:

```php
<p>
    Is it 2026? <?= date("Y") == "2026" ? "yes" : "no" ?>
</p>

```

We will later get back to decision making, but the "a ? b : c " instruction is an "Immediate IF" or "Ternary operatoin"
and can be used to write simple decisions as an expression. 

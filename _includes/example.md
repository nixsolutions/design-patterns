<div class="test-example">
<h2>Тест-пример: </h2>
<details>
<summary> <b> {{ site.data[page.pattern-category].patterns[page.pattern-title].test.name }} </b> </summary>
  {% highlight php startinline %}
  {% assign file-path =  site.data[page.pattern-category].patterns[page.pattern-title].test.path %}
{% include_absolute {{ file-path }} %}
  {% endhighlight %}
</details>
</div>
<div class="test-example">
<h2>Test case: </h2>
<details>
<summary> <b> {{ site.data.ru[page.pattern-category].patterns[page.pattern-title].test.name }} </b> </summary>
  {% highlight php startinline %}
  {% assign file-path =  site.data.ru[page.pattern-category].patterns[page.pattern-title].test.path %}
{% include {{ file-path }} %}
  {% endhighlight %}
</details>
</div>
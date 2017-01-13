<ul class="spoiler-list">

{% for folder in site.data.patterns-creational.patterns[page.pattern-title].structure.folders %}
  <li>
  {% if folder != "main" %}
      <b><i>{{ folder }}</i></b>
      <ul class="spoiler-list">
  {% endif %}
    
  {% for file in site.data.patterns-creational.patterns[page.pattern-title].structure.files[folder] %}
    {% if site.data.patterns-creational.patterns[page.pattern-title].structure.sub-folders %}
        {% if site.data.patterns-creational.patterns[page.pattern-title].structure.sub-folders contains file[0] %}
            <b><i>{{ file[0] }}</i></b>
            <ul class="spoiler-list">
                {% for sub-file in file[1] %}
                <li>
                    <details>
                      <summary> <b>{{ sub-file[0] }}</b> </summary>
                      {% highlight php startinline %}
                      {% assign file-path = sub-file[1].path %}
{% include_absolute {{ file-path }} %}
                      {% endhighlight %}
                    </details>
                </li>
                {% endfor %}
            </ul>
        {% else %}
          <li>
            <details>
              <summary> <b>{{ file[0] }}</b> </summary>
              {% highlight php startinline %}
              {% assign file-path = file[1].path %}
{% include_absolute {{ file-path }} %}
              {% endhighlight %}
            </details>
          </li>
        {% endif %} 
    {% else %}
        <li>
            <details>
              <summary> <b>{{ file[0] }}</b> </summary>
              {% highlight php startinline %}
              {% assign file-path = file[1].path %}
{% include_absolute {{ file-path }} %}
              {% endhighlight %}
            </details>
          </li>
    {% endif %}
  {% endfor %}
  
  {% if folder != "main" %}
    </ul>  
  {% endif %}
{% endfor %}
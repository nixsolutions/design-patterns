---
layout: page
breadcrumb: Структурные Шаблоны
pattern-category: patterns-structural
permalink: ru/structural/
lang: ru
---

{% include {{ site.data.ru.patterns-structural.path }} %}

**Шаблоны**:
{% for pattern in site.data.ru.patterns-structural.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}
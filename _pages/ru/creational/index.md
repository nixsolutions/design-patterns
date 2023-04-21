---
layout: page
breadcrumb: Порождающие Шаблоны
pattern-category: patterns-creational
permalink: ru/creational/
lang: ru
---

{% include {{ site.data.ru.patterns-creational.path }} %}

**Шаблоны**:
{% for pattern in site.data.ru.patterns-creational.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}

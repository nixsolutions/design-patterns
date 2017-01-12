---
layout: page
breadcrumb: Шаблоны поведения
permalink: /behavioral/
---

{% include_absolute {{ site.data.patterns-config.behavioral.path }} %}

**Шаблоны**:
{% for pattern in site.data.patterns-config.behavioral.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}
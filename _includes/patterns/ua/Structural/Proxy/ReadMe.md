**Замісник** (англ. **Proxy**) — структурний шаблон проєктування, надає об'єкт, який контролює
доступ до іншого об'єкта, перехоплюючи всі виклики (виконує функцію контейнера).

Найбільш частим застосуванням шаблону **Проксі** є ліниве завантаження (**lazy load**).
"Важкі" об'єкти не завжди розумно завантажувати в момент ініціалізації. Більш правильним рішенням буде завантажити
його на першу вимогу.

Представимо нашу кухню (** Kitchen).

У нас є якийсь склад булок(**`Kitchen->muffinPool`**) для бургерів. Замовлення йдуть – булки витрачаються.
У нас є контакти перевіреного постачальника (**`MuffinForwarder`**), який надає нам булки. У постачальника також є
якесь сховище і зв'язок із фабрикою (**`MuffinFactory`**), яка виробляла булки.
У нашому прикладі "Заступників" буде два. Це кухня та постачальник.


Розглянемо всю суть трохи ближче.

* **Фабрика(`MuffinFactory`)** просто виробляє булки. Вам потрібна булка?
  **`MuffinFactory->getProduct()`** віддасть вам новий об'єкт типу **Product**.
* **Постачальник(`MuffinForwarder`)** має якесь сховище для булок.
  **`MuffinForwarder->getProduct()`** віддасть вам об'єкт типу **`Product`** зі свого сховища.
  Як тільки булки закінчуються, він звертається до Фабрики та робить закупівлю.
* **Кухня(`Kitchen`)** як і постачальник, має сховище.
  **`Kitchen->getProduct()`** так само віддасть вам об'єкт типу **`Product`** зі свого сховища.
  Як тільки є необхідність у булках, ми звертаємося до постачальника.

А зараз давайте зрозуміємо, навіщо нам все це потрібно?
Якщо постачальник має булки, час їх доставляння на кухню займає якийсь час. Наприклад, **10** хвилин.
Якщо у постачальника їх немає, він замовляє їх у фабрики. Виробництво однієї займає, наприклад, **1** хвилину.
Час це ресурс, який споживають наші об'єкти. І ініціалізація їх потрібна лише за необхідності.
Даний шаблон дуже схожий на Декоратора. Що б вловити суть, уявімо, що клієнту недоступна ні фабрика, ні постачальник.
Він просто не зможе отримати продукт. Він знає, що є кухня, і все.
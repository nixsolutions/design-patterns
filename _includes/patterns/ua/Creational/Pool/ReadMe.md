**Пул Об'єктів** (англ. **Object pool**) - це хеш, в який можна складати
ініціалізовані об'єкти та діставати їх звідти за потреби. По суті, є
окремим випадком реєстру.

Зберігання об'єктів у пулі може помітно підвищити продуктивність, коли
вартість ініціалізації екземпляра класу висока, швидкість екземпляра класу висока,
а кількість екземплярів, що одночасно використовуються, в будь-який момент часу є низькою.
Час вилучення об'єкта з пулу легко прогнозується, на відміну створення нових
об'єктів (особливо з мережевим зверху), що займає невизначений час.

**Застосування:**
* Інформація про видимі об'єкти у багатьох комп'ютерних іграх. Ця інформація є актуальною
  лише протягом одного кадру;
* З'єднання з базами даних;
* З'єднання сокетів;
* Ініціалізація великих графічних об'єктів, таких як шрифти або растрові зображення.

У нашій закусочній є відділ кадрів. Так само є один
різноробочий, і він вільний. З'явилося якесь завдання, яке потрібно виконати. Ми говоримо
відділу кадрів: "Дайте нам робітника". Відділ кадрів дивиться, чи є вільні робітники. Якщо
є, віддає нам одного робітника і позначає його як зайнятого.

**Примітка:**
* Після того, як об'єкт повернуто, він повинен повернутися в стан, придатний для
  подальшого використання. Якщо об'єкти після повернення в пул опиняються в неправильному
  або невизначеному стані, така конструкція називається **Об'єктною Клоакою** (англ. **Object
  Cesspool**).
* Повторне використання об'єктів також може призвести до витоку інформації. Якщо в об'єкті
  є секретні дані (наприклад, номер кредитної картки), після звільнення об'єкта цю
  інформацію треба затерти.
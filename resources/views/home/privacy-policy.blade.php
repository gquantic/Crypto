@extends('layouts.land')

@section('content')
    <!-- Banner Section Starts Here -->
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Информация</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="/template-assets/digihyip/images/banner/inner-bg.png" alt="banner" class="shape shape1">
            <img src="/template-assets/digihyip/images/banner/inner-thumb.png" alt="banner" class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


    <!-- Privacy Policy Section Starts Here -->
    <div class="privacy-policy padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section__header max-p text-center">
                        <h2 class="section__header-title">Раздел информации RAU COIN</h2>
                        <p>Ознакомьтесь с правилами и условиями нашего проекта, а так же с политикой развития компании</p>
                    </div>
                </div>
            </div>
            <ul class="privacy__tab__menu transection__tab__menu d-flex flex-wrap justify-content-center">
                <li><a class="cmn--btn2 active" href="#overview">Правила</a></li>
                <li><a class="cmn--btn2" href="#data-collection">Конфиденциальность</a></li>
                <li><a class="cmn--btn2" href="#cookie">Развитие</a></li>
                <li><a class="cmn--btn2" href="#security">Инвестиции</a></li>
                <li><a class="cmn--btn2" href="#rounds">Раунды</a></li>
            </ul>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="privacy__card" id="overview">
                        <h3 class="privacy__card-title">ПРАВИЛА И ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ</h3>
                        <p>ОБЩИЕ ПОЛОЖЕНИЯ<p>
                        <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                            <p>1.1 Пользовательское Соглашение рассматривает правила и условия предоставления услуг проекта «RED AURUM COIN»<p>
                            <p>1.2 Начиная пользоваться услугами проекта, отдельными его функциями или пройдя процедуру регистрации, “Клиент” принимает все условия Пользовательского Соглашения в полном объеме, без всяких исключений. В случае несогласия “Клиента” с какими-либо из положений Соглашения, “Клиент” не вправе пользоваться услугами сервиса.<p>
                            <p>1.3 Пользовательское Соглашение может быть изменено в любое время. Также администрация оставляет за собой право добавлять или удалять пункты настоящего Соглашения без уведомления “Клиента”. Новая редакция Соглашения вступает в силу с момента ее размещения на сайте.<p>
                            <p>1.4 В случае если сервисом были внесены какие-либо изменения в Пользовательское Соглашение в порядке, предусмотренном пунктом 1.3, с которыми “Клиент” не согласен, он обязан прекратить пользоваться услугами сервиса.<p>
                            <p>РЕГИСТРАЦИЯ КЛИЕНТА<p>
                            <p>2.1 Для того чтобы воспользоваться услугами сервиса “Клиенту” необходимо пройти процедуру регистрации, в результате которой будет создана уникальная учетная запись. Регистрация предполагает, что “Клиент" полностью и безоговорочно соглашается со всеми пунктами данного Пользовательского Соглашения.<p>
                            <p>2.2 К регистрации на сервисе допускаются дееспособные граждане старше 18 лет. Регистрируясь, “Клиент” подтверждает, что является совершеннолетним.<p>
                            <p>2.3 “Клиент” соглашается с тем, что все совершенные его действия являются добровольными.<p>
                            <p>2.4 “Клиент” может использовать только один аккаунт. Если правила “Клиентом” были нарушены, то администрация имеет полное право заблокировать данные без возврата денежных средств.<p>
                            <p>2.5 Для доступа на сайт “Клиенту” необходимо выбрать логин и пароль, этой информации будет достаточно. Выбранный вами логин не может быть передан третьим лицам. За безопасность выбранных вами данных вы несете полную ответственность. Во избежание утери или краже персональных данных администрация сайта настоятельно рекомендует использовать только сложные никому неизвестные пароли. Сервис не несет за это ответственности<p>
                            <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                <p> ПРАВА И ОБЯЗАННОСТИ СЕРВИСА<p>
                                <p>3.1 Сервис соблюдает все меры безопасности своего сайта, обеспечивает анонимность и конфиденциальность личных данных, в соответствии с Политикой Конфиденциальности. Администрация гарантирует, что никакая информация о “Клиентах” данного сервиса не будет передана третьим лицам.<p>
                                <p>3.2 Если “Клиент” предоставляет ложную информацию или у администрации сайта есть основания считать, что предоставленная “Клиентом” информация неполная или недостоверная, администрация имеет полное право по своему усмотрению заблокировать либо удалить учетную запись “Клиента”.<p>
                                <p>3.3 Возможные риски, недоработки сайта сервис берет на себя. Это никак не повлияет на “Клиента” и его денежные средства.<p>
                                <p>3.4 Администрация сайта может приостановить работу с “Клиентом” в следующих случаях:<p>
                                <p>3.4.1 Если “Клиент” нарушает условия настоящего Пользовательского Соглашения или предпринимает попытки причинить вред сервису.<p>
                                <p>3.4.2 Если с одного ПК или одного IP адреса совершается несколько регистраций и если “Клиент” использует больше одной учетной записи.<p>
                                <p>3.5 В соответствии с изменением курса RAuCOIN проект обязуется начислять и выплачивать прибыль в соответствии с установленными инвестиционными планами, указанными на сайте http://redaurumcoin.com/.<p>
                                <p>3.6 Зачисление денежных средств после продажи RAu COIN “Клиенту” производятся в той валюте, в которой был открыт внутренний счет “Клиенту” при регистрации в системе (для стран СНГ по умолчанию открывется счет в рублях).<p>
                                <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                    <p>ПРАВА И ОБЯЗАННОСТИ КЛИЕНТА<p>
                                    <p>4.1 Для участия в данном сервисе “Клиент” должен выполнить процедуру регистрации на сайте, создание аккаунта абсолютно бесплатно. Пользоваться услугами сайта может каждый человек, независимо от места проживания, социального статуса и веры.<p>
                                    <p>4.2 “Клиент” обязан предоставить верную информацию своих данных при регистрации на сайте.<p>
                                    <p>4.3 Индивидуальный логин и пароль “Клиент” должен хранить в полной конфиденциальности.<p>
                                    <p>4.4 Рассылка спама о сервисе строго запрещена, “Клиент” должен это понять и полностью принять этот факт. При нарушении этого пункта администрация имеет право заблокировать аккаунт и денежные средства без возврата.<p>
                                    <p>4.5 Сервисом приветствуется, если “Клиент” будет производить информирование и привлечение новых пользователей различными рекламными методами.<p>
                                    <p>4.6 Свою партнерскую ссылку “Клиент” может распространять любым доступным и удобным для него способом.<p>
                                    <p>4.7. “Клиент” может требовать от проекта выполнения всех условий Пользовательского Соглашения.<p>
                                    <p>4.8. “Клиент” имеет право выбрать любой из предоставленных ему инвестиционных планов с любой суммой приобретения RAu COIN, которая соответствует диапазону инвестиционных лимитов выбранного плана.<p>
                                    <p>4.9. “Клиент” вправе продавать или обменивать купленные RAu COIN и получать прибыль в соответствии с разницей от курса в день покупки RAu COIN и курса в день осуществления продажи или обмена RAu COIN.<p>
                                    <p>4.10. Для приобретения RAu COIN “Клиент” имеет право использовать любой удобный для него тип электронной валюты и метод оплаты, которую принимает Сервис.<p>
                                    <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                        <p> УВЕДОМЛЕНИЕ О РИСКАХ<p>
                                        <p>5.1 Все инвестиции связаны с рисками, “Клиент” всецело должен это понимать и принимать.<p>
                                        <p>5.2 Компания MIKE GROUP посредством собственного проекта «RED AURUM COIN» установила цель быть одной из лидирующих сервисов для личных инвестиций, но не гарантирует, что в будущем не возникнут форс мажорные обстоятельства или обстоятельства непреодолимой силы, которые могут оказать отрицательное воздействие на успешное развитие проекта и получению соответствующей прибыли для поддержания стабильного роста курса RAu COIN.<p>
                                        <p>5.3 “Клиент”, принявший правила сервиса, при всяком развитии событий должен понимать, что упрёки администрации сервиса и компании MIKE GROUP в обмане или жульничестве, нарушении его прав, будут восприняты как заведомо ложный донос, и будут инициированы судебные разбирательства в отношении причинения марального и материального ущерба проекту и компании..</p>
                    </div>
                    <div class="privacy__card" id="data-collection">
                        <h3 class="privacy__card-title">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</h3>
                        <p> I. Общие положения<p>
                        <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                            <p> Настоящие Положение о политике конфиденциальности (далее — Положение) является официальным документом проекта RAu COIN и определяет порядок обработки и защиты информации о физических лицах (далее — Пользователи), пользующихся сервисами, информацией?, услугами нашей компании расположенного на доменном имени http://redaurumcoin.com/ (далее — Сайт).<p>
                            <p> Целью данной Политики конфиденциальности является обеспечение защиты прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну, от несанкционированного доступа и разглашения,<p>
                            <p> В разработанном нами Положении о политике конфиденциальности описывается то, как мы осуществляем обработку персональных данных — любые действия (операции) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, передачу (предоставление), удаление, персональных данных.<p>
                            <p> Наша компания руководствуется принципами:<p>
                            <p>— законности целей и способов обработки персональных данных;<p>
                            <p>— добросовестности;<p>
                            <p>— соответствия целей обработки персональных данных целям, заранее определенным и заявленным при сборе персональных данных, а также полномочиям компании; — соответствия объема и характера обрабатываемых персональных данных, способов обработки персональных данных целям обработки персональных данных
                            <p> Настоящая Политика распространяется на обработку личных, персональных данных, собранных любыми средствами.<p>
                            <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                <p> II. Сбор персональных данных<p>
                                <p> Целью обработки персональных данных является выполнения обязательств Оператора перед Пользователями в отношении оказания услуг, использования Саийта и его сервисов.<p>
                                <p> Обработка персональных данных пользователей осуществляется с согласия субъекта персональных данных на обработку его персональных данных.<p>
                                <p> Под персональными данными понимается любая информация, относящаяся к прямо или косвенно определенному или определяемому физическому лицу (субъекту персональных данных) и которая может быть использована для идентификации определенного лица либо связи с ним.<p>
                                <p> Мы можем запросить у Вас персональные данные в любой момент, когда Вы связываетесь с компанией. Организация может использовать такие данные в соответствии с настоящей Политикои? Конфиденциальности.<p>
                                <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                    <p> III. Хранение и использование персональных данных<p>
                                    <p> Персональные данные Пользователеи? хранятся исключительно на электронных носителях и обрабатываются с использованием автоматизированных систем, за исключением случаев, когда неавтоматизированная обработка персональных данных необходима в связи с исполнением требований законодательства.<p>
                                    <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                        <p> КАК МЫ ИСПОЛЬЗУЕМ ВАШУ ПЕРСОНАЛЬНУЮ ИНФОРМАЦИЮ<p>
                                        <p> Наша Организация использует информацию указанным здесь образом и способом с вашего согласия, предусмотренного действующими законодательством.<p>
                                        <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                            <p>- Мы используем информацию для ответа на ваши запросы или вопросы. Например, мы будем использовать ваши данные для предоставления вам запрашиваемых услуг, например для исполнения вашей заявки для решения вопроса работы вашего личного кабинета, а также для отправки вам электронного сообщения или тикета.<p>
                                            <p>- Мы используем информацию для улучшения наших веб-сайтов и услуг. Мы можем использовать ваши данные для улучшения работы нашего сервиса.<p>
                                            <p>- Мы используем информацию в целях безопасности. В разрешенных законом случаях мы можем использовать сведения о вас для защиты нашей организации, наших клиентов и наших веб-сайтов.<p>
                                            <p>- Мы используем информацию для связи с вами и обсуждения вашей учетной записи или ваших отзывов о нас. Мы можем обращаться к вам в связи с вашей учетной записью или для того, чтобы услышать ваш отзыв. Мы также можем обращаться к вам в связи с данной «Политикой конфиденциальности».<p>
                                            <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                                <p> IV. Передача персональных данных<p>
                                                <p> Персональные данные Пользователей не передаются каким-либо третьим лицам.<p>
                                                <p> Обработка персональных данных Пользователя осуществляется без ограничения срока, любым законным способом, в том числе в информационных системах персональных данных с использованием средств автоматизации или без использования таких средств<p>
                                                <p> Оператор осуществляет блокирование персональных данных, относящихся к соответствующему Пользователю, с момента обращения или запроса Пользователя или его законного представителя либо уполномоченного органа по защите прав субъектов персональных данных на период проверки, в случае выявления недостоверных персональных данных или неправомерных действий.<p>
                                                <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                                    <p> ИНЫЕ ЛИЦА<p>
                                                    <p> Организации не имеет право — в соответствии с законом, судебным порядком, в судебном разбирательстве и/или на основании публичных запросов или запросов от государственных органов на территории или вне территории страны Вашего пребывания — раскрыть Ваши персональные данные.<p>
                                                    <p> V. Уничтожение персональных данных<p>
                                                    <p> Персональные данные пользователя уничтожаются при:<p>
                                                    <p> удалении Оператором информации, размещаемой Пользователем;<p>
                                                    <p> при отзыве субъектом персональных данных согласия на обработку персональных данных.<p>
                                                    <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                                        <p> ДРУГОЕ<p>
                                                        <p> Посетитель сайта компании, предоставляющий свои персональные данные и информацию, тем самым соглашается с положениями данной Политики Конфиденциальности.<p>
                                                        <p> Организация оставляет за собой право вносить любые изменения в Политику в любое время по своему усмотрению с целью дальнейшего совершенствования системы защиты от несанкционированного доступа к сообщаемым Пользователями персональным данным без согласия Пользователя..</p>
                    </div>
                    <div class="privacy__card" id="cookie">
                        <h3 class="privacy__card-title">ЦЕЛИ И РАЗВИТИЕ</h3>
                        <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                            <p>В интернете можно найти множество предложений по вложениям и заработку, однако большинство из них мягко говоря мошеннические, а те проекты, которые действительно рабочие, требуют внимания и тщательного изучения механизмов и правил для получения дохода.</p>
                            <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                <p>Цель проекта RAu COIN - предоставить каждому желающему возможность зарабатывать вне зависимости от его знаний, навыков и умений. Основную работу выполняют наши специалисты в области подбора инвестиционных проектов, и сопровождают данные проекты до получения максимальной прибыли. Поэтому денежные средтва полученные от реализации RAu COIN приносят стабильную прибыль. И соответсвенно растущий курс нашего токена дает возможность Вам получать доход не прикладывая каких либо услий.</p>
                                <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                    <p>При подборе проектов и рабочих предприятий для дальнейшего инвестирования специалисты компании ориентируются на выбор крупных иностранных и Российских компаний, основными критериями которых является надежность и долгосрочность</p>
                                    <p>Каждый проект выбирается со всей ответственностью и проходит ряд сложных проверок, а так же тщательного, взвешенного анализа</p>
                                    <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                        <p>Бизнес индустрии куда корпорация MIKE CROUP инвестирует средства</p>
                                        <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                            <li> Кино индустрия</li>
                                            <li> Криптовалюты</li>
                                            <li> IT индустрия</li>
                                            <li> Нефтедобыча и переработка</li>
                                            <li> Технологии нейросетей</li>
                                            <li> Фин тех стартапы</li>
                                        </ul>
                    </div>
                    <div class="privacy__card" id="security">
                        <h3 class="privacy__card-title">ИНВЕСТИЦИИ</h3>
                        <p>Одним из приоритетных направлений нашей компании является SMART -инвестирование в успешные стартапы. </p>
                        <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                            <p>Что такое SMART-инвестиции и чем они полезнее простых инвестиций? </p>
                            <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                <p>На фоне растущего интереса к «Умным» решениям в стартап-индустрии появилось понятие SMART-инвестиций. Это логическое продолжение основных принципов инвестирования, согласно которому инвестор должен принимать корректные и эффективные инвестиционные решения, отвечающие точно сформулированным потребностям. </p>
                                <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                    <p>Для общего понимания можно рассматривать слово SMART как аббревиатуру, содержащую следующие компоненты:</p>
                                    <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                        <li> S — Specific (конкретика);</li>
                                        <li> M — Measurable (измеримость);</li>
                                        <li >A — Achievable (достижимость);</li>
                                        <li> R — Relevant (актуальность);</li>
                                        <li> T — Time-bound (ограничение во времени).</li>
                                    </ul>
                                    <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4 single--line">
                                    </ul>
                                    <p> Следовательно, SMART-инвестирование — это достижение четко обозначенных, важных для инвестора и количественно измеримых финансовых целей за установленный отрезок времени.  </p>
                                    <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4 single--line">
                                    </ul>
                                    <p> Наша компания  под SMART-вложениями понимает не только деньги, которые мы инвестируем, но и:  </p>
                                    <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4 single--line">
                                        <li> собственный опыт и знания;</li>
                                        <li> технологические средства;</li>
                                        <li> инструменты и методики развития бизнеса;</li>
                                        <li> помощь с доступом к международному рынку;</li>
                                        <li> нетворкинг, в том числе менторство и связи внутри индустрии;</li>
                                    </ul>
                                    <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4 single--line">
                                    </ul>
                                    <p> Таким образом, в стартап-сфере SMART-инвестиция с нашей стороны — это вливание в проект финансовых и иных ресурсов, которых ему не хватает для достижения поставленных бизнес-целей. </p>
                                    <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                        <p> Какие потребности стартапа закрываем мы как SMART-инвестор, и рассмотрим, что входит в комфортное для компании MIKE GROUP понятие SMART-инвестиций. Вот список бизнес-потребностей, которые мы чаще всего закрываюм для своих портфельных компаний: </p>
                                        <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                            <p> - фандрайзинг: привлечение новых средств финансирования; </p>
                                            <p> - техническое сопровождение: консультации по разработке и усовершенствованию проекта с точки зрения технологий; </p>
                                            <p> - HR-операции: поиск кадров, наем рабочих, разработка системы поощрений; </p>
                                            <p> - мониторинг: встречи по обсуждению дальнейшей стратегии, постановка промежуточных целей, наблюдение за метриками; </p>
                                            <p> - поиск новых клиентов: каналы рекламы, доступ к оптовым заказчикам и индустриальным компаниям, выходы на ЛПР. </p>
                                            <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                                <p> Преимущества и польза «умных» инвестиций. </p>
                                                <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                                    <p>Многие владельцы стартапов отчаянно нуждаются в деньгах, а поэтому готовы принять первое встречное предложение. В краткосрочной перспективе это не так плохо: наличие капитала всегда лучше его отсутствия, — но такой подход может иметь долгосрочные последствия. Деньги не залог развития, а лишь его составляющая. Без нашей экспертной помощи такое вложение теряет огромную часть своей ценности.  </p>
                                                    <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4">
                                                        <p> Вот почему наши эксперты и наш подход к инвестированию приносит высокую маржинальность! </p>
                                                        <ul class="info__list d-flex flex-wrap mt-3 mt-sm-4 single--line">
                                                        </ul>
                    </div>
                    <div class="privacy__card" id="rounds">
                        <h3 class="page__title">Раунды RAu COIN</h3><br><br>

            <h3 style="font-weight: bolder;color:#d7a825;">Раунд 1</h3>
            <p>
                Компания MIKE GROUP 15.08.2022г. объявляет старт продаж Rau COIN, стартовый курс 70 рублей — 1 RAU COIN
                <br><br>

                <b>Период действия «Раунда 1» — с 15.08.2022г. по 31.12.2022 года.</b> <br><br>

                Общая эмиссия составляет 100 000 000 Rau COIN <br><br>

                Объявляется открытая продажа Rau COIN <br><br>

                Минимальное количество продаж «Раунда 1» должно составить не менее 30% от всей эмиссии RAu COIN <br><br>

                Физическое или юридическое лицо купившее Rau COIN в первом раунде, имеет возможность в течении действия «Раунда 1» реализовать до 10% от всей суммы Rau COIN находящейся на балансе владельца.
                <br><br>

                Колебания курса RAu COIN в период действия «Раунда 1» планируются от +0,2% до +0,5% в сутки, и зависит от спроса и инвестиционных портфелей компании MIKE GROUP.
                <br><br>
                Общее планируемое изменение курса за весь период «Раунда 1» от + 27% до + 70%, средний показатель доходности 48,5%
                <br><br>
                После окончания «Раунда 1» прекращается свободная продажа RAu COIN.
            </p>

            <hr>
            <br>

            <h3 style="font-weight: bolder;color:#d7a825;">Раунд 2</h3>
            <p>
                <b>Период действия «Раунда 2» с 01.01.2023 года по 30.06.2023</b><br><br>

                Минимальное количество продаж «Раунда 2» должно составить не менее 50% от всей эмиссии RAu COIN <br><br>

                Свободная продажа прекращена, открывается продажа токена только действующим владельцам Rau COIN и новым пользователям только по приглашению действующих владельцев RAu COIN.
                <br><br>

                Так же у действующих владельцев Rau COIN появляется возможность реализации до 30% собственного портфеля приглашенным пользователям посредством прямой передачи RAu COIN через P2P канал площадки MIKE GROUP.
                <br><br>
                Колебания курса RAu COIN в период действия «Раунда 2» планируются от +0,3% до +0,6% в сутки, и зависит от спроса и полученной прибыли от инвестиционных портфелей компании MIKE GROUP.
                <br><br>
                Общее планируемое изменение курса за весь период «Раунда 2» от + 54% до + 110%, средний показатель доходности 82,3%

            </p>

            <hr>
            <br>

            <h3 style="font-weight: bolder;color:#d7a825;">Раунд 3</h3>
            <p>
                <b>Период действия «Раунда 2» с 01.07.2023 года по 31.12.2023</b><br><br>

                В период действия «Раунда 3» планируется реализовать весь пакет эмиссии RAu COIN <br><br>

                Свободная продажа в период действия «Раунда 3» прекращена, продажа токена допустима только действующим владельцам Rau COIN и новым пользователям только по приглашению действующих владельцев RAu COIN.
                <br><br>
                Так же у действующих владельцев Rau COIN появляется возможность реализации до 50% собственного портфеля приглашенным пользователям посредством прямой передачи RAu COIN через P2P канал площадки MIKE GROUP.
                <br><br>
                Колебания курса RAu COIN в период действия «Раунда 3» планируются от +0,35% до +0,8% в сутки, и зависит от спроса и полученной прибыли от инвестиционных портфелей компании MIKE GROUP.
                <br><br>
                Общее планируемое изменение курса за весь период «Раунда 3» от + 64,5% до + 146%, средний показатель доходности 105,2%
            </p>

            <hr>
            <br>

            <h3 style="font-weight: bolder;color:#d7a825;">Последний раунд «Биржа»</h3>
            <p>
                Старт собственной биржи MIKE GROUP с 01.01.2024 <br><br>

                С данного момента весь оставшийся (не проданный) пакет эмиссия RAu COIN распределяется внутри компании MIKE GROUP и размещается для свободных торгов на бирже.
                <br><br>

                Так же у всех действующих владельцев Rau COIN появляется возможность реализации до 100% собственного портфеля на бирже MIKE GROUP.
                <br><br>

                Проект открыт для регистрации новых пользователей, и приобретения RAu COIN на свободных торгах на бирже MIKE GROUP.
                <br><br>

                Колебания курса RAu COIN на бирже планируются от +0,5 % до +1,5 % в сутки, и зависит от спроса, а так же продолжает иметь зависимость от полученной прибыли и общей капитализации совокупности инвестиционных портфелей компании MIKE GROUP. <br><br>
                Средний показатель доходности от 100 % годовых


            </p>


        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Privacy Policy Section Ends Here -->
@endsection

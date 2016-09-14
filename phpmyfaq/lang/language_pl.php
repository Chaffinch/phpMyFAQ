<?php

/**
 * Polish language file
 *
 * PHP Version 5.5
 *
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can
 * obtain one at http://mozilla.org/MPL/2.0/.
 *
 * @category  phpMyFAQ-2.9.5
* @author    Bogusław Zięba  <bobi@poczta.fm>
 * @copyright 2004-2016 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      http://www.phpmyfaq.de
 * @since     2016-09-11
 */

$PMF_LANG['metaCharset'] = 'UTF-8';
$PMF_LANG['metaLanguage'] = 'pl';
$PMF_LANG['language'] = 'polski';
// ltr: left to right (e.g. English language); rtl: right to left (e.g. Arabic language)
$PMF_LANG['dir'] = 'ltr';

$PMF_LANG['nplurals'] = '2';
/**
 * This parameter is used with the function 'plural' from inc/Language/Plurals.php
 * If this parameter and function are not in sync plural form support will be broken.
 *
 * If you add a translation for a new language, correct plural form support will be missing
 * (English plural messages will be used) until you add a correct expression to the function
 * 'plural' mentioned above.
 * If you need any help, please contact phpMyFAQ team.
 */

// Navigation
$PMF_LANG['msgCategory'] = 'Kategorie';
$PMF_LANG['msgShowAllCategories'] = 'Wszystkie kategorie';
$PMF_LANG['msgSearch'] = 'Szukaj';
$PMF_LANG['msgAddContent'] = 'Dodaj artykuł';
$PMF_LANG['msgQuestion'] = 'Zadaj pytanie';
$PMF_LANG['msgOpenQuestions'] = 'Pytania otwarte';
$PMF_LANG['msgHelp'] = 'Pomoc';
$PMF_LANG['msgContact'] = 'Kontakt';
$PMF_LANG['msgHome'] = 'Start';
$PMF_LANG['msgNews'] = 'FAQ newsy';
$PMF_LANG['msgUserOnline'] = ' Użytkowników on-line';
$PMF_LANG['msgBack2Home'] = 'Wróć na stronę główną';

// Contentpages
$PMF_LANG['msgFullCategories'] = 'Kategorie z wpisami';
$PMF_LANG['msgFullCategoriesIn'] = 'Kategorie z wpisami w ';
$PMF_LANG['msgSubCategories'] = 'Podkategorie';
$PMF_LANG['msgEntries'] = 'Wpisy';
$PMF_LANG['msgEntriesIn'] = 'Pytania w ';
$PMF_LANG['msgViews'] = 'odsłon(y)';
$PMF_LANG['msgPage'] = 'Strona ';
$PMF_LANG['msgPages'] = ' Stron';
$PMF_LANG['msgPrevious'] = 'poprzednia';
$PMF_LANG['msgNext'] = 'następna';
$PMF_LANG['msgCategoryUp'] = 'kategoria wyżej';
$PMF_LANG['msgLastUpdateArticle'] = 'Ostatnia aktualizacja: ';
$PMF_LANG['msgAuthor'] = 'Autor: ';
$PMF_LANG['msgPrinterFriendly'] = 'Wersja do wydruku';
$PMF_LANG['msgPrintArticle'] = 'Wydrukuj ten wpis';
$PMF_LANG['msgMakeXMLExport'] = 'Eksportuj jako XML';
$PMF_LANG['msgAverageVote'] = 'Średnia ocena:';
$PMF_LANG['msgVoteUseability'] = 'Oceń ten wpis:';
$PMF_LANG['msgVoteFrom'] = 'z';
$PMF_LANG['msgVoteBad'] = 'całkowicie bezużyteczne';
$PMF_LANG['msgVoteGood'] = 'najlepszy';
$PMF_LANG['msgVotings'] = 'Głosów';
$PMF_LANG['msgVoteSubmit'] = 'Głosuj';
$PMF_LANG['msgVoteThanks'] = 'Dziękujemy za oddany głos!';
$PMF_LANG['msgYouCan'] = 'Możesz ';
$PMF_LANG['msgWriteComment'] = 'skomentuj ten wpis';
$PMF_LANG['msgShowCategory'] = 'Przegląd wpisu: ';
$PMF_LANG['msgCommentBy'] = 'Komentarz ';
$PMF_LANG['msgCommentHeader'] = 'Komentuj ten wpis';
$PMF_LANG['msgYourComment'] = 'Twój komentarz:';
$PMF_LANG['msgCommentThanks'] = 'Dziękujemy za komentarz!';
$PMF_LANG['msgSeeXMLFile'] = 'otwórz plik XML';
$PMF_LANG['msgSend2Friend'] = 'Wyślij do znajomego';
$PMF_LANG['msgS2FName'] = 'Imię i nazwisko:';
$PMF_LANG['msgS2FEMail'] = 'Adres e-mail:';
$PMF_LANG['msgS2FFriends'] = 'Twoi znajomi:';
$PMF_LANG['msgS2FEMails'] = '. ich adresy e-mail:';
$PMF_LANG['msgS2FText'] = 'Tekst do wysłania:';
$PMF_LANG['msgS2FText2'] = 'FAQ znajdziesz pod następującym adresem:';
$PMF_LANG['msgS2FMessage'] = 'Dodatkowa informacja dla znajomych:';
$PMF_LANG['msgS2FButton'] = 'wyślij wiadomość';
$PMF_LANG['msgS2FThx'] = 'Dziękujemy za polecenie tej strony!';
$PMF_LANG['msgS2FMailSubject'] = 'Rekommendacja od ';

// Search
$PMF_LANG['msgSearchWord'] = 'Słowo kluczowe';
$PMF_LANG['msgSearchFind'] = 'Wynik wyszukiwania';
$PMF_LANG['msgSearchAmount'] = ' wynik wyszukiwania';
$PMF_LANG['msgSearchAmounts'] = ' wyniki wyszukiwania';
$PMF_LANG['msgSearchCategory'] = 'Kategoria: ';
$PMF_LANG['msgSearchContent'] = 'Odpowiedź: ';

// new Content
$PMF_LANG['msgNewContentHeader'] = 'Propozycja do FAQ';
$PMF_LANG['msgNewContentAddon'] = 'Twoja propozycja zostanie opublikowana po zaakceptowaniu przez administratora. Pamiętaj, aby wypełnić <strong>imię i nazwisko</strong>, <strong>adres e-mail</strong>, <strong>kategorię</strong>, <strong>nagłówek</strong> i <strong>treść pytania</strong>. Słowa kluczowe należy oddzielić spacją.';
$PMF_LANG['msgNewContentName'] = 'Imię i nazwisko:';
$PMF_LANG['msgNewContentMail'] = 'Adres e-mail:';
$PMF_LANG['msgNewContentCategory'] = 'Kategoria';
$PMF_LANG['msgNewContentTheme'] = 'Twoje pytanie:';
$PMF_LANG['msgNewContentArticle'] = 'Twoja odpowiedź:';
$PMF_LANG['msgNewContentKeywords'] = 'Słowa kluczowe:';
$PMF_LANG['msgNewContentLink'] = 'Link do wpisu';
$PMF_LANG['msgNewContentSubmit'] = 'Wyślij';
$PMF_LANG['msgInfo'] = 'Dodatkowe informacje: ';
$PMF_LANG['msgNewContentThanks'] = 'Dziękujemy za przesłanie propozycji pytania!';
$PMF_LANG['msgNoQuestionsAvailable'] = 'Nie ma żadnych pytań.';

// ask Question
$PMF_LANG['msgNewQuestion'] = 'Zadaj poniżej swoje pytanie:';
$PMF_LANG['msgAskCategory'] = 'Kategoria pytania:';
$PMF_LANG['msgAskYourQuestion'] = 'Treść pytania:';
$PMF_LANG['msgAskThx4Mail'] = 'Dziękujemy za Twoje pytanie.';
$PMF_LANG['msgDate_User'] = 'Data / Użytkownik';
$PMF_LANG['msgQuestion2'] = 'Pytanie';
$PMF_LANG['msg2answer'] = 'Odpowiedź';
$PMF_LANG['msgQuestionText'] = 'Na tej stronie znajdują się pytania innych użytkowników. Możesz napisać odpowiedzi na te pytania i wówczas być może trafią one do zasobów FAQ.';

// Contact
$PMF_LANG['msgContactEMail'] = 'E-mail do webmastera:';
$PMF_LANG['msgMessage'] = 'Wiadomość:';

// Startseite
$PMF_LANG['msgTopTen'] = 'Napopularniejsze';
$PMF_LANG['msgHomeThereAre'] = 'Udostępniamy obecnie ';
$PMF_LANG['msgHomeArticlesOnline'] = ' Pytań on-line';
$PMF_LANG['msgNoNews'] = 'Nie ma żadnych newsów.';
$PMF_LANG['msgLatestArticles'] = 'Najnowsze';

// E-Mailbenachrichtigung
$PMF_LANG['msgMailThanks'] = 'Dziękujemy za propozycje do naszego FAQ.';
$PMF_LANG['msgMailCheck'] = 'Dodano nowy wpis do FAQ! Zajrzyj do sekcji administracyjnej.';
$PMF_LANG['msgMailContact'] = 'Wiadomość wysłana do administratora.';

// Fehlermeldungen
$PMF_LANG['err_noDatabase'] = 'Brak połączenia z bazą danych!';
$PMF_LANG['err_noHeaders'] = 'Nie ma żadnej kategorii!';
$PMF_LANG['err_noArticles'] = '<p>Brak wpisów.</p>';
$PMF_LANG['err_badID'] = '<p>Błędny identyfikator!</p>';
$PMF_LANG['err_noTopTen'] = '<p>Jeszcze nie ma TOP 10.</p>';
$PMF_LANG['err_nothingFound'] = '<p>Brak wpisów.</p>';
$PMF_LANG['err_SaveEntries'] = 'Wymagane pola: <strong>Imię i Nazwisko</strong>, <strong>Adres e-mail</strong>, <strong>Kategoria</strong>, <strong>Nagłówek</strong> oraz <strong>Treść wpisu</strong>!';
$PMF_LANG['err_SaveComment'] = 'Wymagane pola: <strong>Imię i Nazwisko</strong>, <strong>Adres e-mail</strong> oraz <strong>Treść komentarza</strong>!';
$PMF_LANG['err_VoteTooMuch'] = 'Nie liczą się podwójnie głosowania';
$PMF_LANG['err_noVote'] = 'Nie oceniasz pytania!';
$PMF_LANG['err_noMailAdress'] = 'Twój adres e-mail nie jest prawidłowy';
$PMF_LANG['err_sendMail'] = '$PMF_LANG["err_sendMail"] = "Wymagane pola to <strong>your name</strong>, <strong>Twój adres e-mail</strong>, <strong>Twoje pytanie</strong> i, na prośbę, the <strong><a href=\"http://en.wikipedia.org/wiki/Captcha\" title=\"Czytaj więcej na Captcha w Wikipedia\" target=\"_blank\">kod</a> Captcha</strong>!";';

// Hilfe zur Suche
$PMF_LANG['help_search'] = '<p><strong>Szukaj wpisu:</strong><br /></p>';

// Menu
$PMF_LANG['ad'] = 'Aministracja';
$PMF_LANG['ad_menu_user_administration'] = 'Użytkownicy';
$PMF_LANG['ad_menu_entry_aprove'] = 'Akceptuj wpisy';
$PMF_LANG['ad_menu_entry_edit'] = 'Edytuj wpisy';
$PMF_LANG['ad_menu_categ_add'] = 'Dodaj kategorię';
$PMF_LANG['ad_menu_categ_edit'] = 'Adminstracja kategoriami';
$PMF_LANG['ad_menu_news_add'] = 'Dodaj newsa';
$PMF_LANG['ad_menu_news_edit'] = 'Edytuj newsa';
$PMF_LANG['ad_menu_open'] = 'Edytuj pytania otwarte';
$PMF_LANG['ad_menu_stat'] = 'Statystyka ocen';
$PMF_LANG['ad_menu_cookie'] = 'Ustaw ciasteczka';
$PMF_LANG['ad_menu_session'] = 'Przejrzyj sesje';
$PMF_LANG['ad_menu_adminlog'] = 'Przejrzyj logi admina';
$PMF_LANG['ad_menu_passwd'] = 'Zmień hasło';
$PMF_LANG['ad_menu_logout'] = 'Wyloguj';
$PMF_LANG['ad_menu_startpage'] = 'Początek';

// Nachrichten
$PMF_LANG['ad_msg_identify'] = 'Podaj swój login.';
$PMF_LANG['ad_msg_passmatch'] = 'Obydwa hasła muszą być <strong>identyczne</strong>!';
$PMF_LANG['ad_msg_savedsuc_1'] = 'Profil';
$PMF_LANG['ad_msg_savedsuc_2'] = 'zapisano pomyślnie.';
$PMF_LANG['ad_msg_mysqlerr'] = 'Nie można zapisać profilu z powodu <strong>błędu bazy danych</strong>.';
$PMF_LANG['ad_msg_noauth'] = 'Nie zostałeś zautoryzowany.';

// Allgemein
$PMF_LANG['ad_gen_page'] = 'Strona';
$PMF_LANG['ad_gen_of'] = 'z';
$PMF_LANG['ad_gen_lastpage'] = 'Poprzednia strona';
$PMF_LANG['ad_gen_nextpage'] = 'Następna strona';
$PMF_LANG['ad_gen_save'] = 'Zapisz';
$PMF_LANG['ad_gen_reset'] = 'Wyczyść';
$PMF_LANG['ad_gen_yes'] = 'Tak';
$PMF_LANG['ad_gen_no'] = 'Nie';
$PMF_LANG['ad_gen_top'] = 'W górę';
$PMF_LANG['ad_gen_ncf'] = 'Nie znaleziono kategorii!';
$PMF_LANG['ad_gen_delete'] = 'Usuń';

// Benutzerverwaltung
$PMF_LANG['ad_user'] = 'Administracja użytkownikami';
$PMF_LANG['ad_user_username'] = 'Zarejestrowani użytkownicy';
$PMF_LANG['ad_user_rights'] = 'Uprawnienia';
$PMF_LANG['ad_user_edit'] = 'edytuj';
$PMF_LANG['ad_user_delete'] = 'usuń';
$PMF_LANG['ad_user_add'] = 'Dodaj użytkownika';
$PMF_LANG['ad_user_profou'] = 'Profil użytkownika';
$PMF_LANG['ad_user_name'] = 'Imię';
$PMF_LANG['ad_user_password'] = 'Hasło';
$PMF_LANG['ad_user_confirm'] = 'Potwierdź';
$PMF_LANG["ad_user_rights"] = "Uprawnienia";
$PMF_LANG['ad_user_del_1'] = 'Użytkownik';
$PMF_LANG['ad_user_del_2'] = 'ma być skasowany?';
$PMF_LANG['ad_user_del_3'] = 'Jesteś pewien?';
$PMF_LANG['ad_user_deleted'] = 'Użytkownik został skasowany.';
$PMF_LANG["ad_user_checkall"] = "Zaznacz wszystko";

// Beitragsverwaltung
$PMF_LANG['ad_entry_aor'] = 'Administracja wpisami';
$PMF_LANG['ad_entry_id'] = 'ID ';
$PMF_LANG['ad_entry_topic'] = 'Temat';
$PMF_LANG['ad_entry_action'] = 'Akcja';
$PMF_LANG['ad_entry_edit_1'] = 'Edytuj Wpis';
$PMF_LANG['ad_entry_edit_2'] = '';
$PMF_LANG['ad_entry_theme'] = 'Pytanie';
$PMF_LANG['ad_entry_content'] = 'Odpowiedź:';
$PMF_LANG['ad_entry_keywords'] = 'Słowa kluczowe:';
$PMF_LANG['ad_entry_author'] = 'Autor:';
$PMF_LANG['ad_entry_category'] = 'Kategoria:';
$PMF_LANG['ad_entry_active'] = 'Widoczne';
$PMF_LANG['ad_entry_date'] = 'Data:';
$PMF_LANG['ad_entry_changed'] = 'Zmieniono?';
$PMF_LANG['ad_entry_changelog'] = 'Rejestr zmian';
$PMF_LANG['ad_entry_commentby'] = 'Komentowane przez';
$PMF_LANG['ad_entry_comment'] = 'Komentarze:';
$PMF_LANG['ad_entry_save'] = 'Zapisz';
$PMF_LANG['ad_entry_delete'] = 'usuń';
$PMF_LANG['ad_entry_delcom_1'] = 'Czy na pewno komentarz użytkownika';
$PMF_LANG['ad_entry_delcom_2'] = 'ma być usunięty?';
$PMF_LANG['ad_entry_commentdelsuc'] = 'Komentarz został <strong>skasowany</strong>.';
$PMF_LANG['ad_entry_back'] = 'Wstecz';
$PMF_LANG['ad_entry_commentdelfail'] = 'Komentarz <strong>nie został</strong> skasowany.';
$PMF_LANG['ad_entry_savedsuc'] = 'Zmiany zostały <strong>zapisane</strong>.';
$PMF_LANG['ad_entry_savedfail'] = 'Wystąpił <strong>błąd bazy danych</strong>.';
$PMF_LANG['ad_entry_del_1'] = 'Czy na pewno temat';
$PMF_LANG['ad_entry_del_2'] = 'z';
$PMF_LANG['ad_entry_del_3'] = 'ma być usunięty?';
$PMF_LANG['ad_entry_delsuc'] = 'Pozycja została <strong>usunięta</strong>.';
$PMF_LANG['ad_entry_delfail'] = 'Pozycja <strong>nie została</strong> usunięta.';
$PMF_LANG["ad_entry_back"] = "Wróć";


// Newsverwaltung
$PMF_LANG['ad_news_header'] = 'Nagłówek artykułu';
$PMF_LANG['ad_news_text'] = 'Treść wpisu';
$PMF_LANG['ad_news_link_url'] = 'Link :';
$PMF_LANG['ad_news_link_title'] = 'Tytuł linku:';
$PMF_LANG['ad_news_link_target'] = 'Okno docelowe linku';
$PMF_LANG['ad_news_link_window'] = 'Link otwiera się w nowym oknie';
$PMF_LANG['ad_news_link_faq'] = 'Link otwiera się w FAQ';
$PMF_LANG['ad_news_add'] = 'Dodaj newsa';
$PMF_LANG['ad_news_id'] = '#';
$PMF_LANG['ad_news_headline'] = 'Nagłówek';
$PMF_LANG['ad_news_date'] = 'Data';
$PMF_LANG['ad_news_action'] = 'Akcja';
$PMF_LANG['ad_news_update'] = 'aktualizuj';
$PMF_LANG['ad_news_delete'] = 'usuń';
$PMF_LANG['ad_news_nodata'] = 'Brak danych w bazie';
$PMF_LANG['ad_news_updatesuc'] = 'Newsy zaktualizowano.';
$PMF_LANG['ad_news_del'] = 'Czy na pewno chcesz skasować te newsy?';
$PMF_LANG['ad_news_yesdelete'] = 'tak, usuń!';
$PMF_LANG['ad_news_nodelete'] = 'nie!';
$PMF_LANG['ad_news_delsuc'] = 'News skasowany.';
$PMF_LANG['ad_news_updatenews'] = 'Aktualizacja newsów';

// Kategorieverwaltung
$PMF_LANG['ad_categ_new'] = 'Dodaj nową kategorię';
$PMF_LANG['ad_categ_catnum'] = 'Numer kategorii:';
$PMF_LANG['ad_categ_subcatnum'] = 'Numer podkategorii:';
$PMF_LANG['ad_categ_nya'] = '<em>jeszcze nic nie odpublikowano!</em>';
$PMF_LANG['ad_categ_titel'] = 'Tytuł kategorii';
$PMF_LANG['ad_categ_add'] = 'Dodaj kategorię';
$PMF_LANG['ad_categ_existing'] = 'Istniejące kategorie';
$PMF_LANG['ad_categ_id'] = '#';
$PMF_LANG['ad_categ_categ'] = 'Kategoria';
$PMF_LANG['ad_categ_subcateg'] = 'Podkategoria';
$PMF_LANG["ad_categ_titel"] = "Nazwa kategorii";
$PMF_LANG['ad_categ_action'] = 'Akcja';
$PMF_LANG['ad_categ_update'] = 'zapisz zmiany';
$PMF_LANG['ad_categ_delete'] = 'usuń';
$PMF_LANG['ad_categ_updatecateg'] = 'Aktualizuj Kategorię';
$PMF_LANG['ad_categ_nodata'] = 'Brak danych w bazie';
$PMF_LANG['ad_categ_remark'] = 'W przypadku usunięcia kategorii, skasowane zostą wszystkie wpisy znajdujące się w tej kategorii. W takim przypkadu przenieś wpisy do nowej kategorii lub usuń wpis.';
$PMF_LANG['ad_categ_edit_1'] = 'Edytuj';
$PMF_LANG['ad_categ_edit_2'] = 'Kategoria';
$PMF_LANG['ad_categ_added'] = 'Kategoria została dodana.';
$PMF_LANG['ad_categ_updated'] = 'Kategoria została zaktualizowana.';
$PMF_LANG['ad_categ_del_yes'] = 'tak, usuń!';
$PMF_LANG['ad_categ_del_no'] = 'nie!';
$PMF_LANG['ad_categ_deletesure'] = 'Czy na pewno chcesz skasować tę kategorię?';
$PMF_LANG['ad_categ_deleted'] = 'Kategoria została skasowana.';

// Cookies
$PMF_LANG["ad_cookie_cookiesuc"] = "The cookie was <strong>z powodzeniem</strong> ustawiono.";
$PMF_LANG['ad_cookie_already'] = 'Cookie już ustawiono. Obecnie możesz:';
$PMF_LANG['ad_cookie_again'] = 'Ustaw cookie ponownie';
$PMF_LANG['ad_cookie_delete'] = 'Usuń cookie';
$PMF_LANG['ad_cookie_no'] = 'Cookie jeszcze nie ustawiono. Ustawiając cookie możesz się ponownie logować bez podawania hasła i loginu. Obecnie możesz:';
$PMF_LANG['ad_cookie_set'] = 'Ustaw cookie';
$PMF_LANG['ad_cookie_deleted'] = 'Cookie zostało skasowane.';

// Adminlog
$PMF_LANG['ad_adminlog'] = 'Sesje Admina';

// Passwd
$PMF_LANG['ad_passwd_cop'] = 'Zmień swoje Hasło';
$PMF_LANG['ad_passwd_old'] = 'Aktualne hasło:';
$PMF_LANG['ad_passwd_new'] = 'Nowe hasło:';
$PMF_LANG['ad_passwd_con'] = 'Potwierdź:';
$PMF_LANG['ad_passwd_change'] = 'Zmień hasło';
$PMF_LANG['ad_passwd_suc'] = 'Hasło zostało zmienione.';
$PMF_LANG['ad_passwd_remark'] = '<strong>UWAGA:</strong><br />Cookie musi być ponownie ustawione!';
$PMF_LANG['ad_passwd_fail'] = 'Dotychczasowe hasło musi być <strong>poprawne</strong>, natomiast nowe hasło musi być wpisane dwukrotnie.';

// Adduser
$PMF_LANG['ad_adus_adduser'] = 'Dodaj użytkownika';
$PMF_LANG['ad_adus_name'] = 'Użytkownik:';
$PMF_LANG['ad_adus_password'] = 'Hasło:';
$PMF_LANG['ad_adus_add'] = 'Dodaj użytkownika';
$PMF_LANG['ad_adus_suc'] = 'Użytkownik został dodany.';
$PMF_LANG['ad_adus_edit'] = 'Edytuj profil';
$PMF_LANG['ad_adus_dberr'] = '<strong>błąd bazy danych!</strong>';
$PMF_LANG['ad_adus_exerr'] = 'Podane imię już <strong>istnieje</strong> - podaj inne.';

// Sessions
$PMF_LANG['ad_sess_id'] = 'ID ';
$PMF_LANG['ad_sess_sid'] = 'ID sesji';
$PMF_LANG['ad_sess_ip'] = 'Adres IP';
$PMF_LANG['ad_sess_time'] = 'Czas';
$PMF_LANG['ad_sess_pageviews'] = 'Wyświetleń';
$PMF_LANG['ad_sess_search'] = 'Szukaj';
$PMF_LANG['ad_sess_sfs'] = 'Szukaj sesji';
$PMF_LANG['ad_sess_s_ip'] = 'Adres IP:';
$PMF_LANG['ad_sess_s_minct'] = 'min. akcji:';
$PMF_LANG['ad_sess_s_date'] = 'Data';
$PMF_LANG['ad_sess_s_after'] = 'po';
$PMF_LANG['ad_sess_s_before'] = 'przed';
$PMF_LANG['ad_sess_s_search'] = 'Szukaj';
$PMF_LANG['ad_sess_session'] = 'Sesje';
$PMF_LANG['ad_sess_r'] = 'Wynik poszukiwania';
$PMF_LANG['ad_sess_referer'] = 'Ref:';
$PMF_LANG['ad_sess_browser'] = 'Przeglądarka:';
$PMF_LANG['ad_sess_ai_rubrik'] = 'Kategoria:';
$PMF_LANG['ad_sess_ai_artikel'] = 'Wpis:';
$PMF_LANG['ad_sess_ai_sb'] = 'Wyszukiwane frazy:';
$PMF_LANG['ad_sess_ai_sid'] = 'ID sesji:';
$PMF_LANG['ad_sess_back'] = 'Wróć';

// Statistik
$PMF_LANG['ad_rs'] = 'Statystyka ocen';
$PMF_LANG['ad_rs_rating_1'] = 'Ranking ';
$PMF_LANG['ad_rs_rating_2'] = 'pokazuje użytkowników:';
$PMF_LANG['ad_rs_red'] = 'Czerwony';
$PMF_LANG['ad_rs_green'] = 'Zielony';
$PMF_LANG['ad_rs_altt'] = 'ze średnią poniżej 20%';
$PMF_LANG['ad_rs_ahtf'] = 'ze średnią powyżej 80%';
$PMF_LANG['ad_rs_no'] = 'Brak rankingu';

// Auth
$PMF_LANG['ad_auth_insert'] = 'Podaj swój login (imię) i hasło.';
$PMF_LANG['ad_auth_user'] = 'Login:';
$PMF_LANG['ad_auth_passwd'] = 'Hasło:';
$PMF_LANG['ad_auth_ok'] = 'Gotowe';
$PMF_LANG['ad_auth_reset'] = 'Wyczyść';
$PMF_LANG['ad_auth_fail'] = 'Nie ma takiej pary loginu i hasła.';
$PMF_LANG['ad_auth_sess'] = 'Sesja wygasła.';

// Added v0.8 - 24.05.2001 - Bastian - Admin
$PMF_LANG['ad_config_edit'] = 'Edytuj konfigurację';
$PMF_LANG['ad_config_save'] = 'Zapisz konfigurację';
$PMF_LANG['ad_config_reset'] = 'Wyczyść';
$PMF_LANG['ad_config_saved'] = 'Konfiguracja została zapisana.';
$PMF_LANG['ad_menu_editconfig'] = 'Edytuj konfigurację';
$PMF_LANG['ad_att_none'] = 'Nie ma załączników';
$PMF_LANG['ad_att_att'] = 'Plik:';
$PMF_LANG['ad_att_add'] = 'Dołącz plik';
$PMF_LANG['ad_entryins_suc'] = 'Wpis został zachowany.';
$PMF_LANG['ad_entryins_fail'] = 'Wystąpił niespodziewany błąd.';
$PMF_LANG['ad_att_del'] = 'Usuń';
$PMF_LANG['ad_att_nope'] = 'Załączniki dostępne są tylko podczas edycji.';
$PMF_LANG['ad_att_delsuc'] = 'Załącznik został skasowany.';
$PMF_LANG['ad_att_delfail'] = 'Wystąpił niespodziewany błąd podczas kasowania załącznika.';
$PMF_LANG['ad_entry_add'] = 'Dodaj wpis';

// Added v0.85 - 08.06.2001 - Bastian - Admin
$PMF_LANG['ad_csv_make'] = 'Kopia zapasowa jest dokładnym odzwierciedleniem zawartości bazy danych. Kopia powinna być wykonywana przynajmniej raz na miesiąc. Format kopii zapasowej pozwala na jej bezpośredni import np. do phpMyAdmina  przez linię poleceń mysql.';
$PMF_LANG['ad_csv_link'] = 'Pobierz kopię zapasową';
$PMF_LANG['ad_csv_head'] = 'Utwórz kopię zapasową';
$PMF_LANG['ad_att_addto'] = 'Dodaj załącznik';
$PMF_LANG['ad_att_addto_2'] = '';
$PMF_LANG["ad_att_att"] = "Plik:";
$PMF_LANG['ad_att_butt'] = 'Gotowe';
$PMF_LANG['ad_att_suc'] = 'Plik został dodany.';
$PMF_LANG['ad_att_fail'] = 'Wystąpił niespodziewany błąd podczas dodawania załącznika.';
$PMF_LANG['ad_att_close'] = 'Zamknij to okno';

// Added v0.85 - 08.07.2001 - Bastian - Admin
$PMF_LANG['ad_csv_restore'] = 'Przy pomocy tego formularza możesz przywrócić z kopii zapasowej phpmyfaq zawartość bazy danych. Zauważ, że wpisy już istniejące w aktualizowanej bazie phpmyfaq będą nadpisane.';
$PMF_LANG['ad_csv_file'] = 'Plik';
$PMF_LANG['ad_csv_ok'] = 'Gotowe';
$PMF_LANG['ad_csv_linklog'] = 'kopia logów';
$PMF_LANG['ad_csv_linkdat'] = 'kopia danych';
$PMF_LANG['ad_csv_head2'] = 'Przywróć';
$PMF_LANG['ad_csv_no'] = 'Format jest niezgodny z formatem stosowanym w phpmyfaq.';
$PMF_LANG['ad_csv_prepare'] = 'Przygotowuję zapytania do bazy danych...';
$PMF_LANG['ad_csv_process'] = 'Wysyłanie zapytania...';
$PMF_LANG['ad_csv_of'] = 'z';
$PMF_LANG['ad_csv_suc'] = 'zakończono pomyślnie.';
$PMF_LANG['ad_csv_backup'] = 'Kopia zapasowa';
$PMF_LANG['ad_csv_rest'] = 'Przywróć z kopii';

// Added v0.8 - 25.05.2001 - Bastian - Admin
$PMF_LANG['ad_menu_backup'] = 'Kopia zapasowa';
$PMF_LANG['ad_logout'] = 'Sesja pomyślnie zakończona.';
$PMF_LANG["ad_news_add"] = "Dodaj aktualności";
$PMF_LANG['ad_news_edit'] = 'Edytuj newsa';
$PMF_LANG['ad_cookie'] = 'Ciasteczka';
$PMF_LANG['ad_sess_head'] = 'Sesje';

// Added v1.1 - 06.01.2002 - Bastian
$PMF_LANG["ad_menu_categ_edit"] = "Kategorie FAQ";
$PMF_LANG["ad_menu_stat"] = "Statystyki Ocen";
$PMF_LANG['ad_kateg_add'] = 'Dodaj kategorię';
$PMF_LANG['ad_kateg_rename'] = 'Zmień nazwę';
$PMF_LANG['ad_adminlog_date'] = 'Data';
$PMF_LANG['ad_adminlog_user'] = 'Użytkownik';
$PMF_LANG['ad_adminlog_ip'] = 'Adres IP';

$PMF_LANG['ad_stat_sess'] = 'Sesje';
$PMF_LANG['ad_stat_days'] = 'Dni';
$PMF_LANG['ad_stat_vis'] = 'Sesji (Wizyt)';
$PMF_LANG['ad_stat_vpd'] = 'Wizyt dziennie';
$PMF_LANG['ad_stat_fien'] = 'Pierwszy dziennik';
$PMF_LANG['ad_stat_laen'] = 'Ostatni dziennik';
$PMF_LANG['ad_stat_browse'] = 'przeglądaj sesje';
$PMF_LANG['ad_stat_ok'] = 'Gotowe';

$PMF_LANG["ad_sess_time"] = "Czas";
$PMF_LANG["ad_sess_sid"] = "ID-Sesji";
$PMF_LANG["ad_sess_ip"] = "Adres-IP";

$PMF_LANG['ad_ques_take'] = 'Odpowiedz na pytanie';
$PMF_LANG['no_cats'] = 'Brak kategorii!';

// Added v1.1 - 17.01.2002 - Bastian
$PMF_LANG['ad_log_lger'] = 'Nieprawidłowy login lub hasło.';
$PMF_LANG['ad_log_sess'] = 'Sesja wygasła.';
$PMF_LANG['ad_log_edit'] = 'Formularz "Edytuj użytkownika" dla: ';
$PMF_LANG['ad_log_crea'] = 'Formularz \"Nowy artykuł\".';
$PMF_LANG['ad_log_crsa'] = 'Dodano nowy wpis.';
$PMF_LANG['ad_log_ussa'] = 'Aktualizuj dane użytkownika: ';
$PMF_LANG['ad_log_usde'] = 'Usuń użytkownika: ';
$PMF_LANG['ad_log_beed'] = 'Formularz dla użytkownika: ';
$PMF_LANG['ad_log_bede'] = 'Usunięto następujące wpisy: ';

$PMF_LANG['ad_start_visits'] = 'Wizyty';
$PMF_LANG['ad_start_articles'] = 'Artykuły';
$PMF_LANG['ad_start_comments'] = 'Komentarze';


// Added v1.1 - 30.01.2002 - Bastian
$PMF_LANG['ad_categ_paste'] = 'wklej';
$PMF_LANG['ad_categ_cut'] = 'wytnij';
$PMF_LANG['ad_categ_copy'] = 'kopiuj';
$PMF_LANG['ad_categ_process'] = 'Przetwarzam kategorie...';

// Added v1.1.4 - 07.05.2002 - Thorsten
$PMF_LANG['err_NotAuth'] = '<strong>Nie masz uprawnień.</strong>';

// Added v1.2.3 - 29.11.2002 - Thorsten
$PMF_LANG['msgPreviusPage'] = 'poprzednia strona';
$PMF_LANG['msgNextPage'] = 'następna strona';
$PMF_LANG['msgPageDoublePoint'] = 'Strona: ';
$PMF_LANG['msgMainCategory'] = 'Główna kategoria';

// Added v1.2.4 - 30.01.2003 - Thorsten
$PMF_LANG['ad_passwdsuc'] = 'Hasło zostało zmienione!';

// Added v1.3.0 - 04.03.2003 - Thorsten
$PMF_LANG['ad_xml_gen'] = 'Utwórz plik XML';
$PMF_LANG['ad_entry_locale'] = 'Język';
$PMF_LANG['msgLangaugeSubmit'] = 'Zmień język';

// Added v1.3.1 - 29.04.2003 - Thorsten
$PMF_LANG['ad_attach_4'] = 'Dołączany plik musi być mniejszy niż  %s Bitów.';
$PMF_LANG['ad_menu_export'] = 'Eksportuj FAQ';

$PMF_LANG['rightsLanguage']['adduser'] = 'Dodaj użytkownika';
$PMF_LANG['rightsLanguage']['edituser'] = 'Edytuj użytkownika';
$PMF_LANG['rightsLanguage']['deluser'] = 'Usuń użytkownika';
$PMF_LANG['rightsLanguage']['addbt'] = 'Dodaj wpis';
$PMF_LANG['rightsLanguage']['editbt'] = 'Edytuj wpis';
$PMF_LANG['rightsLanguage']['delbt'] = 'Usuń wpis';
$PMF_LANG['rightsLanguage']['viewlog'] = 'Pokaż dziennik';
$PMF_LANG['rightsLanguage']['adminlog'] = 'Pokaż dziennik admina';
$PMF_LANG['rightsLanguage']['delcomment'] = 'Usuń komentarz';
$PMF_LANG['rightsLanguage']['addnews'] = 'Dodaj newsa';
$PMF_LANG['rightsLanguage']['editnews'] = 'Edytuj newsa';
$PMF_LANG['rightsLanguage']['delnews'] = 'Usuń newsa';
$PMF_LANG['rightsLanguage']['addcateg'] = 'Dodaj kategorię';
$PMF_LANG['rightsLanguage']['editcateg'] = 'Edytuj kategorię';
$PMF_LANG['rightsLanguage']['delcateg'] = 'Usuń kategorię';
$PMF_LANG['rightsLanguage']['passwd'] = 'Zmień hasło';
$PMF_LANG['rightsLanguage']['editconfig'] = 'Edytuj konfigurację';
$PMF_LANG['rightsLanguage']['addatt'] = 'Dodaj załączniki';
$PMF_LANG['rightsLanguage']['delatt'] = 'Usuń załączniki';
$PMF_LANG['rightsLanguage']['backup'] = 'Utwórz kopię bezpieczeństwa';
$PMF_LANG['rightsLanguage']['restore'] = 'Odtwórz z kopii';
$PMF_LANG['rightsLanguage']['delquestion'] = 'Usuń pytania otwarte';
$PMF_LANG["rightsLanguage"]['changebtrevs'] = "Edytuj wersje";

$PMF_LANG['msgAttachedFiles'] = 'Pliki dołączone:';

// Added v1.3.3 - 27.05.2003 - Thorsten
$PMF_LANG['ad_user_action'] = 'Akcja';
$PMF_LANG['ad_entry_email'] = 'Adres e-mail:';
$PMF_LANG['ad_entry_allowComments'] = 'Włącz komentarze';
$PMF_LANG['msgWriteNoComment'] = 'Nie możesz komentować tego wpisu';
$PMF_LANG['ad_user_realname'] = 'Imię i nazwisko:';
$PMF_LANG["ad_export_generate_pdf"] = "Utwórz plik PDF";
$PMF_LANG['ad_export_full_faq'] = 'FAQ w pliku PDF: ';
$PMF_LANG['err_bannedIP'] = 'Twój numer IP został zablokowany.';
$PMF_LANG['err_SaveQuestion'] = 'Pola wymagane: <strong>imię i nazwisko</strong>, <strong>adres e-mail</strong> i <strong>treść pytania</strong>!<br /><br /><a href="nojavascript...history.back();">wróć na poprzednią stronę</a><br /><br />';

// added v1.4.0 - 2003-12-04 by Thorsten / Mathias
$LANG_CONF['main.language'] = array(0 => "select", 1 => "Plik językowy");
$LANG_CONF['main.languageDetection'] = array(0 => "checkbox", 1 => "Włącz automatyczną negocjację treści");
$LANG_CONF['main.titleFAQ'] = array(0 => "input", 1 => "Tytuł FAQ");
$LANG_CONF['main.currentVersion'] = array(0 => "print", 1 => "Wersja FAQ");
$LANG_CONF['main.metaDescription'] = array(0 => "input", 1 => "Opis strony");
$LANG_CONF['main.metaKeywords'] = array(0 => "input", 1 => "Słowa kluczowe dla wyszukiwarek");
$LANG_CONF['main.metaPublisher'] = array(0 => "input", 1 => "Imię autora");
$LANG_CONF['main.administrationMail'] = array(0 => "input", 1 => "Adres e-mail administraotra");
$LANG_CONF['main.contactInformations'] = array(0 => "area", 1 => "Informacje kontaktowe");
$LANG_CONF['main.send2friendText'] = array(0 => "area", 1 => "Tekst na stronie \"Wyślij do znajomego\"");
$LANG_CONF['records.maxAttachmentSize'] = array(0 => "input", 1 => "maksymalny rozmiar załącznika w bajtach (maks. %sbajtów)");
$LANG_CONF['records.disableAttachments'] = array(0 => "checkbox", 1 => "Linkować załaczniki pod wpisami?");
$LANG_CONF['main.enableUserTracking'] = array(0 => "checkbox", 1 => "Używać statystyk?");
$LANG_CONF['main.enableAdminLog'] = array(0 => "checkbox", 1 => "Używać logowania działań administratora?");
$LANG_CONF['security.ipCheck'] = array(0 => "checkbox", 1 => "Sprawdzać IP podczas kontroli UIN-ów w admin.php?");
$LANG_CONF['records.numberOfRecordsPerPage'] = array(0 => "input", 1 => "Liczba wyswietlanych tematów na stronę");
$LANG_CONF['records.numberOfShownNewsEntries'] = array(0 => "input", 1 => "Liczba newsów");
$LANG_CONF['security.bannedIPs'] = array(0 => "area", 1 => "Zbanuj te adresy IP");
$LANG_CONF['main.enableRewriteRules'] = array(0 => "checkbox", 1 => "Użyć wsparcia dla mod_rewrite? (domyślnie wyłączone)");
$LANG_CONF['security.ldapSupport'] = array(0 => "checkbox", 1 => "Użyć wsparcia dla LDAP? (domyślnie wyłączone)");
$LANG_CONF["main.referenceURL"] = array(0 => "input", 1 => "URL Twojego FAQ (n.p.: http://www.example.org/faq/)");
$LANG_CONF["main.urlValidateInterval"] = array(0 => "input", 1 => "Odstęp pomiędzy weryfikacją linku AJAX (w sekundach)");
$LANG_CONF["records.enableVisibilityQuestions"] = array(0 => "checkbox", 1 => "Wyłączyć widoczność nowych pytań?");
$LANG_CONF['security.permLevel'] = array(0 => "select", 1 => "Poziom uprawnień");

$PMF_LANG['ad_categ_new_main_cat'] = 'jako nową główną kategorię';
$PMF_LANG['ad_categ_paste_error'] = 'Przesunięcie tej kategorii nie jest możliwe.';
$PMF_LANG['ad_categ_move'] = 'przesuń kategorię';
$PMF_LANG['ad_categ_lang'] = 'Język';
$PMF_LANG['ad_categ_desc'] = 'Opis';
$PMF_LANG['ad_categ_change'] = 'Zamień na';

$PMF_LANG['lostPassword'] = 'Zapomniałeś hasła? Kliknij tutaj.';
$PMF_LANG['lostpwd_err_1'] = 'Błąd: nie znaleziono loginu i adresu e-mail';
$PMF_LANG['lostpwd_err_2'] = 'Błąd: złe wpisy!';
$PMF_LANG['lostpwd_text_1'] = 'Żądanie zrealizowane, dziękujemy.';
$PMF_LANG['lostpwd_text_2'] = 'Ustaw nowe osobiste hasło w części administracyjnej twojego FAQ.';
$PMF_LANG['lostpwd_mail_okay'] = 'E-mail został wysłany.';

$PMF_LANG['ad_xmlrpc_button'] = 'Sprawdź najnowszą wersję phpMyFAQ';
$PMF_LANG['ad_xmlrpc_latest'] = 'Najnowsza dostępna wersja na';

// added v1.5.0 - 2005-07-31 by Thorsten
$PMF_LANG['ad_categ_select'] = 'Wybierz kategorię języka';

// added v1.5.0 - 2005-07-31 by Thorsten
$PMF_LANG['msgSitemap'] = 'Mapa witryny';

// added v1.5.2 - 2005-09-23 by Lars
$PMF_LANG['err_inactiveArticle'] = 'Ten wpis jest w wersji i nie może być wyświetlany.';
$PMF_LANG['msgArticleCategories'] = 'Kategorie dla tego wpisu';

// added v1.6.0 - 2006-02-02 by Thorsten
$PMF_LANG['ad_entry_solution_id'] = 'Unikalny ID rozwiązania';
$PMF_LANG['ad_entry_faq_record'] = 'Zapis FAQ';
$PMF_LANG['ad_entry_new_revision'] = 'Utworzyć nową wersję?';
$PMF_LANG['ad_entry_record_administration'] = 'Administracja Rekordami';
$PMF_LANG['ad_entry_changelog'] = 'Dziennik zmian';
$PMF_LANG['ad_entry_revision'] = 'Wersja';
$PMF_LANG['ad_changerev'] = 'Wybierz Wersję';
$PMF_LANG['msgCaptcha'] = "Proszę wpisać kod captcha";
$PMF_LANG['msgSelectCategories'] = 'Szukaj w ...';
$PMF_LANG['msgAllCategories'] = '... wszystkich kategoriach';
$PMF_LANG['ad_you_should_update'] = 'Twoja instalacja phpMyFAQ jest przestarzała. Należy zaktualizować ją do najnowszej dostępnej wersji.';
$PMF_LANG['msgAdvancedSearch'] = 'Wyszukiwanie zaawansowane';

// added v1.6.1 - 2006-04-25 by Matteoï and Thorsten
$PMF_LANG['spamControlCenter'] = 'Centrum kontroli spamu';
$LANG_CONF["spam.enableSafeEmail"] = array(0 => "checkbox", 1 => "E-mail użytkownika do druku w bezpieczny sposób<br>(domyślnie: włączone).");
$LANG_CONF["spam.checkBannedWords"] = array(0 => "checkbox", 1 => "Sprawdzić zawartość formularza publicznego przeciw zabronionym słowom <br>(domyślnie: włączone.");
$LANG_CONF["spam.enableCaptchaCode"] = array(0 => "checkbox", 1 => "Użyj kodu captcha, aby umożliwić przesyłanie formularza publicznego<br>(domyślnie: włączone).");
$PMF_LANG['ad_session_expiring'] = 'Twoja sesja wygaśnie za %d minut(y): chcesz przejść na pracę?';

// added v1.6.2 - 2006-06-13 by Matteo
$PMF_LANG['ad_stat_management'] = 'Zarządzanie sesjami';
$PMF_LANG['ad_stat_choose'] = 'Wybierz miesiąc';
$PMF_LANG['ad_stat_delete'] = 'Natychmiast usunąć wybrane sesje?';

// added v2.0.0 - 2005-09-15 by Thorsten and by Minoru TODA
$PMF_LANG['ad_menu_glossary'] = 'Słowniczek FAQ';
$PMF_LANG['ad_glossary_add'] = 'Dodaj wpis słowniczka';
$PMF_LANG['ad_glossary_edit'] = 'Edytuj wpis słowniczka';
$PMF_LANG['ad_glossary_item'] = 'Tytuł';
$PMF_LANG['ad_glossary_definition'] = 'Definicja';
$PMF_LANG['ad_glossary_save'] = 'Zapisz słowniczek';
$PMF_LANG['ad_glossary_save_success'] = 'Wpis słowniczka pomyślnie dodany!';
$PMF_LANG['ad_glossary_save_error'] = 'Wpis słowniczek nie mógł być zapisany, ponieważ wystąpił błąd.';
$PMF_LANG['ad_glossary_update_success'] = 'Wpis słowniczka pomyślnie zaktualizowany!';
$PMF_LANG['ad_glossary_update_error'] = 'Wpis słowniczka nie mógł być zaktualizowany, ponieważ wystąpił błąd.';
$PMF_LANG['ad_glossary_delete'] = 'Usuń wpis';
$PMF_LANG['ad_glossary_delete_success'] = 'Wpis słowniczka został pomyślnie usunięty!';
$PMF_LANG['ad_glossary_delete_error'] = 'Wpis słowniczka nie mógł być usunięty, ponieważ wystąpił błąd.';
$PMF_LANG['ad_linkcheck_noReferenceURL'] = 'Automatyczna kontrola linku wyłączona (base URL for link verify not set)';
$PMF_LANG['ad_linkcheck_noAllowUrlOpen'] = 'Automatyczna weryfikacja linku wyłączona (Opcja PHP allow_url_fopen not Włączona)';
$PMF_LANG['ad_linkcheck_checkResult'] = 'Wynik automatycznej weryfikacji linku';
$PMF_LANG['ad_linkcheck_checkSuccess'] = 'O.K.';
$PMF_LANG['ad_linkcheck_checkFailed'] = 'Niepowodzenie';
$PMF_LANG['ad_linkcheck_failReason'] = 'Przyczyna(y) niepowodzenia:';
$PMF_LANG['ad_linkcheck_noLinksFound'] = 'Nie  znaleziono adresów kompatybilnych z funkcją weryfikatora linków.';
$PMF_LANG['ad_linkcheck_searchbadonly'] = 'Tylko ze złymi linkami';
$PMF_LANG['ad_linkcheck_infoReason'] = 'Dodatkowe Informacje:';
$PMF_LANG['ad_linkcheck_openurl_infoprefix'] = 'Znaleziono podczas testowania <strong>%s</strong>: ';
$PMF_LANG['ad_linkcheck_openurl_notready'] = 'LinkVerifier nie gotowy.';
$PMF_LANG['ad_linkcheck_openurl_maxredirect'] = 'Maksymalna liczba przekierowań <strong>%d</strong> przekroczona.';
$PMF_LANG['ad_linkcheck_openurl_urlisblank'] = 'Resolved to pusty URL.';
$PMF_LANG['ad_linkcheck_openurl_tooslow'] = 'Host <strong>%s</strong> jest wolny lub nie reaguje.';
$PMF_LANG['ad_linkcheck_openurl_nodns'] = 'DNS resolution of host <strong>%s</strong> jest wolny lub nie powiodło się z powodu problemów z DNS, lokalnie lub zdalnie.';
$PMF_LANG['ad_linkcheck_openurl_redirected'] = 'URL został przekierowany do <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_openurl_ambiguous'] = 'Niejednoznaczny stan HTTP <strong>%s</strong> zwrócony.';
$PMF_LANG['ad_linkcheck_openurl_not_allowed'] = 'Metoda <em>HEAD</em> ta nie jest obsługiwana przez hosta <strong>%s</strong>, dozwolone metody: <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_openurl_not_found'] = 'Tego zasobu nie można znaleźć na stronie hosta <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_protocol_unsupported'] = '%s protokół obsługiwany przez automatyczną weryfikację linku.';
$PMF_LANG['msgNewQuestionVisible'] = 'Pytanie musi być najpierw przejrzane przed publikacją.';
$PMF_LANG['msgQuestionsWaiting'] = 'Oczekiwanie na publikację przez administratorów: ';
$PMF_LANG['ad_entry_visibility'] = 'Opublikować?';

// added v2.0.0 - 2006-01-02 by Lars
$PMF_LANG['ad_user_error_password'] =  "Proszę wpisać hasło. ";
$PMF_LANG['ad_user_error_passwordsDontMatch'] =  "Hasła nie pasują do siebie. ";
$PMF_LANG['ad_user_error_loginInvalid'] =  "Podana nazwa użytkownika jest nieprawidłowa.";
$PMF_LANG['ad_user_error_noEmail'] =  "Proszę podać poprawny adres e-mail. ";
$PMF_LANG['ad_user_error_noRealName'] =  "Proszę podać swoje imię. ";
$PMF_LANG['ad_user_error_delete'] =  "Konto użytkownika nie może zostać usunięte. ";
$PMF_LANG['ad_user_error_noId'] =  "Nie określono ID. ";
$PMF_LANG['ad_user_error_protectedAccount'] =  "Konto użytkownika jest chronione. ";
$PMF_LANG['ad_user_deleteUser'] = "Usuń Użytkownika";
$PMF_LANG['ad_user_status'] = "Status : ";
$PMF_LANG['ad_user_lastModified'] = "ostatnia modyfikacja:";
$PMF_LANG['ad_gen_cancel'] = "Anuluj";
$PMF_LANG["rightsLanguage"]['addglossary'] = "dodaj pozycję słowniczka";
$PMF_LANG["rightsLanguage"]['editglossary'] = "edytuj pozycję słowniczka";
$PMF_LANG["rightsLanguage"]['delglossary'] = "usuń pozycję słowniczka";
$PMF_LANG["ad_menu_group_administration"] = "Grupy";
$PMF_LANG['ad_user_loggedin'] = 'Zalogowany jako ';

$PMF_LANG['ad_group_details'] = "Szczegóły Grupy";
$PMF_LANG['ad_group_add'] = "Dodaj Grupę";
$PMF_LANG['ad_group_add_link'] = "Dodaj Grupę";
$PMF_LANG['ad_group_name'] = "Nazwa";
$PMF_LANG['ad_group_description'] = "Opis";
$PMF_LANG['ad_group_autoJoin'] = "Automatyczne-dołączanie";
$PMF_LANG['ad_group_suc'] = "Grupa <strong>pomyślnie</strong> dodana.";
$PMF_LANG['ad_group_error_noName'] = "Proszę podać nazwę grupy. ";
$PMF_LANG['ad_group_error_delete'] = "Grupa nie może być usunięta. ";
$PMF_LANG['ad_group_deleted'] = "Grupa został pomyślnie usunięta.";
$PMF_LANG['ad_group_deleteGroup'] = "Usuń Grupę";
$PMF_LANG['ad_group_deleteQuestion'] = "Czy na pewno chcesz usunąć tę grupę?";
$PMF_LANG['ad_user_uncheckall'] = "Odznacz Wszystko";
$PMF_LANG['ad_group_membership'] = "Członkostwo w Grupie";
$PMF_LANG['ad_group_members'] = "Członkowie";
$PMF_LANG['ad_group_addMember'] = "+";
$PMF_LANG['ad_group_removeMember'] = "-";

// added v2.0.0 - 2006-07-20 by Matteo
$PMF_LANG['ad_export_which_cat'] = 'Limit danych FAQ do wyeksportowania (opcjonalne)';
$PMF_LANG['ad_export_cat_downwards'] = 'Dołączyć kategorie potomne?';
$PMF_LANG['ad_export_type'] = 'Format eksportu';
$PMF_LANG['ad_export_type_choose'] = 'Obsługiwane formaty:';
$PMF_LANG['ad_export_download_view'] = 'Pobierać lub przejrzeć inline?';
$PMF_LANG['ad_export_download'] = 'pobierz';
$PMF_LANG['ad_export_view'] = 'przejżyj in-line';
$PMF_LANG['ad_export_gen_xhtml'] = 'Utwórz plik XHTML';

// added v2.0.0 - 2006-07-22 by Matteo
$PMF_LANG['ad_news_data'] = 'FAQ Aktualności';
$PMF_LANG['ad_news_author_name'] = 'Nazwisko autora:';
$PMF_LANG['ad_news_author_email'] = 'E-mail autora:';
$PMF_LANG['ad_news_set_active'] = 'Aktywuj';
$PMF_LANG['ad_news_allowComments'] = 'Zezwól na komentarze:';
$PMF_LANG['ad_news_expiration_window'] = 'Okno czasu wygaśnięcia Newsa (opcjonalne)';
$PMF_LANG['ad_news_from'] = 'Od:';
$PMF_LANG['ad_news_to'] = 'Do:';
$PMF_LANG['ad_news_insertfail'] = 'Wystąpił błąd wstawiania wiadomości newsa do bazy danych.';
$PMF_LANG['ad_news_updatefail'] = 'Wystąpił błąd aktualizacji wiadomości newsa do bazy danych.';
$PMF_LANG['newsShowCurrent'] = 'Pokaż aktualne newsy.';
$PMF_LANG['newsShowArchive'] = 'Pokaż zarchiwizowane newsy.';
$PMF_LANG['newsArchive'] = ' Archiwum newsów';
$PMF_LANG['newsWriteComment'] = 'skomentuj ten wpis';
$PMF_LANG['newsCommentDate'] = 'Dodano: ';

// added v2.0.0 - 2006-07-29 by Matteo & Thorsten
$PMF_LANG['ad_record_expiration_window'] = 'Okno czasu wygaśnięcia rekordu (opcjonalne)';
$PMF_LANG['admin_mainmenu_home'] = 'Zaplecze';
$PMF_LANG['admin_mainmenu_users'] = 'Użytkownicy';
$PMF_LANG['admin_mainmenu_content'] = 'Zawartość';
$PMF_LANG['admin_mainmenu_statistics'] = 'Statystyki';
$PMF_LANG['admin_mainmenu_exports'] = 'Eksport';
$PMF_LANG['admin_mainmenu_backup'] = 'Kopia';
$PMF_LANG['admin_mainmenu_configuration'] = 'Konfiguracja';
$PMF_LANG['admin_mainmenu_logout'] = 'Wyloguj';

// added v2.0.0 - 2006-08-15 by Thorsten and Matteo
$PMF_LANG["ad_categ_owner"] = 'Właściciel kategorii';
$PMF_LANG['adminSection'] = 'Administracja';
$PMF_LANG['err_expiredArticle'] = 'Ten wpis wygasł, nie może być wyświetlany';      
$PMF_LANG['err_expiredNews'] = 'Ten news wygasł i, nie może być wyświetlony';
$PMF_LANG['err_inactiveNews'] = 'Ten news znajduje się w wersji i, nie może być wyświetlony';
$PMF_LANG['msgSearchOnAllLanguages'] = 'szukaj we wszystkich językach';
$PMF_LANG['ad_entry_tags'] = 'Etykiety';
$PMF_LANG['msg_tags'] = 'Etykiety';

// added v2.0.0 - 2006-09-03 by Matteo
$PMF_LANG['ad_linkcheck_feedback_url-batch1'] = 'Sprawdzanie...';
$PMF_LANG['ad_linkcheck_feedback_url-batch2'] = 'Sprawdzanie...';
$PMF_LANG['ad_linkcheck_feedback_url-batch3'] = 'Sprawdzanie...';
$PMF_LANG['ad_linkcheck_feedback_url-checking'] = 'Sprawdzanie...';
$PMF_LANG['ad_linkcheck_feedback_url-disabled'] = 'Wyłączone';
$PMF_LANG['ad_linkcheck_feedback_url-linkbad'] = 'Linki OK';
$PMF_LANG['ad_linkcheck_feedback_url-linkok'] = 'Linki OK';
$PMF_LANG['ad_linkcheck_feedback_url-noaccess'] = 'Brak dostępu';
$PMF_LANG['ad_linkcheck_feedback_url-noajax'] = 'Brak AJAX';
$PMF_LANG['ad_linkcheck_feedback_url-nolinks'] = 'Brak Linków';
$PMF_LANG['ad_linkcheck_feedback_url-noscript'] = 'Brak Scriptu';

// added v2.0.0 - 2006-09-02 by Thomas
$PMF_LANG['msg_related_articles'] = 'Podobne wpisy';
$LANG_CONF['records.numberOfRelatedArticles'] = array(0 => "input", 1 => "Ilość powiązanych wpisów");

// added v2.0.0 - 2006-09-09 by Rudi
$PMF_LANG['ad_categ_trans_1'] = 'Tłumacz';
$PMF_LANG['ad_categ_trans_2'] = 'Kategoria';
$PMF_LANG['ad_categ_translatecateg'] = 'Tłumacz Kategorię';
$PMF_LANG['ad_categ_translate'] = 'Przetłumacz';
$PMF_LANG['ad_categ_transalready'] = 'Już przetłumaczone: ';
$PMF_LANG["ad_categ_deletealllang"] = 'Usunąć we wszystkich językach?';
$PMF_LANG["ad_categ_deletethislang"] = 'Usunąć tylko w tym języku?';
$PMF_LANG["ad_categ_translated"] = "Kategoria została przetłumaczona.";

// added v2.0.0 - 2006-09-21 by Rudi
$PMF_LANG["ad_categ_show"] = "Zestawienie kategorii";
$PMF_LANG['ad_menu_categ_structure'] = "Zestawienie kategorii w tym jej języków";

// added v2.0.0 - 2006-09-26 by Thorsten
$PMF_LANG['ad_entry_userpermission'] = 'Uprawnienia użytkowników:';
$PMF_LANG['ad_entry_grouppermission'] = 'Uprawnienia grup:';
$PMF_LANG['ad_entry_all_users'] = 'Dostęp dla wszystkich użytkowników';
$PMF_LANG['ad_entry_restricted_users'] = 'Ograniczony dostęp do';
$PMF_LANG['ad_entry_all_groups'] = 'Dostęp dla wszystkich grup';
$PMF_LANG['ad_entry_restricted_groups'] = 'Ograniczony dostęp do';
$PMF_LANG['ad_session_expiration'] = 'Sesja wygasa za';
$PMF_LANG['ad_user_active'] = 'aktywny';
$PMF_LANG['ad_user_blocked'] = 'blokowany';
$PMF_LANG['ad_user_protected'] = 'chroniony';

// added v2.0.0 - 2006-10-07 by Matteo
$PMF_LANG['ad_entry_intlink'] = 'Wybierz rekord FAQ, aby wstawić go jako link...';

//added 2.0.0 - 2006-10-10 by Rudi
$PMF_LANG["ad_categ_paste2"] = "Wklej po";
$PMF_LANG["ad_categ_remark_move"] = "Wymiana 2 kategorii jest możliwa jedynie na tym samym poziomie.";
$PMF_LANG["ad_categ_remark_overview"] = "Poprawna kolejność kategorii będdzie wyświetlana, jeżeli wszystkie kategorie są określone dla faktycznego języka (pierwsza kolumna).";

// added v2.0.0 - 2006-10-15 by Matteo
$PMF_LANG['msgUsersOnline'] = '%d Gości i %d Zarejestrowany';
$PMF_LANG['ad_adminlog_del_older_30d'] = 'Natychmiast usuń dzienniki starsze niż 30 dni';
$PMF_LANG['ad_adminlog_delete_success'] = 'Starsze dzienniki pomyślnie usunięto.';
$PMF_LANG['ad_adminlog_delete_failure'] = 'Nie usunięto dzienników: wystąpił błąd wykonywania żądania.';

// added 2.0.0 - 2006-11-19 by Thorsten
$PMF_LANG['opensearch_plugin_install'] = 'dodaj wtyczkę wyszukiwania';
$PMF_LANG['ad_quicklinks'] = 'Szybkie linki';
$PMF_LANG['ad_quick_category'] = 'Dodaj nową kategorię';
$PMF_LANG['ad_quick_record'] = 'Dodaj nowy rekord FAQ';
$PMF_LANG['ad_quick_user'] = 'Dodaj nowego użytkownika';
$PMF_LANG['ad_quick_group'] = 'Dodaj nową grupę';

// added v2.0.0 - 2006-12-30 by Matteo
$PMF_LANG['msgNewTranslationHeader'] = 'Propozycja tłumaczenia';
$PMF_LANG['msgNewTranslationAddon'] = 'Twoja propozycja nie zostanie opublikowana zaraz, but will be released by the administrator upon receipt. Wymagane pola to <strong>your Nazwisko</strong>, <strong>your e-mail address</strong>, <strong>your question translation</strong> and <strong>your answer translation</strong>. Proszę rozdzielić słowa kluczowe tylko przecinkami.';
$PMF_LANG['msgNewTransSourcePane'] = 'Panel źródłowa';
$PMF_LANG['msgNewTranslationPane'] = 'Panel tłumaczenia';
$PMF_LANG['msgNewTranslationName'] = "Twoje Nazwisko:";
$PMF_LANG['msgNewTranslationMail'] = "Twój adres email:";
$PMF_LANG['msgNewTranslationKeywords'] = "Słowa kluczowe:";
$PMF_LANG['msgNewTranslationSubmit'] = 'Prześlij swoją propozycję';
$PMF_LANG['msgTranslate'] = 'Przetłumacz to FAQ';
$PMF_LANG['msgTranslateSubmit'] = 'Rozpocznij tłumaczenie...';
$PMF_LANG['msgNewTranslationThanks'] = "Dziękujemy za propozycję tłumaczenia!";

// added v2.0.0 - 2007-02-27 by Matteo
$PMF_LANG["rightsLanguage"]['addgroup'] = "dodaj grupę kont";
$PMF_LANG["rightsLanguage"]['editgroup'] = "edytuj grupę kont";
$PMF_LANG["rightsLanguage"]['delgroup'] = "usuń grupę kont";

// added v2.0.0 - 2007-02-27 by Thorsten
$PMF_LANG['ad_news_link_parent'] = 'Link otworzy się w nadrzędnym oknie';

// added v2.0.0 - 2007-03-04 by Thorsten
$PMF_LANG['ad_menu_comments'] = 'Komentarze';
$PMF_LANG['ad_comment_administration'] = 'Administracja komentarzami';
$PMF_LANG['ad_comment_faqs'] = 'Komentarze w rekordach FAQ:';
$PMF_LANG['ad_comment_news'] = 'Komentarze w rekordach News:';
$PMF_LANG['msgPDF'] = 'Wersja PDF';
$PMF_LANG['ad_groups'] = 'Grupy';

// added v2.0.0 - 2007-03-10 by Thorsten
$LANG_CONF['records.orderby'] = array(0 => 'select', 1 => 'Sortowanie rekordów (według właściwości)');
$LANG_CONF['records.sortby'] = array(0 => 'select', 1 => 'Sortowanie rekordów (malejąco lub rosnąco)');
$PMF_LANG['ad_conf_order_id'] = 'ID<br>(domyślny)';
$PMF_LANG['ad_conf_order_thema'] = 'Tytuł';
$PMF_LANG['ad_conf_order_visits'] = 'Liczba odwiedzających';
$PMF_LANG['ad_conf_order_updated'] = 'Data';
$PMF_LANG['ad_conf_order_author'] = 'Autor';
$PMF_LANG['ad_conf_desc'] = 'malejąco';
$PMF_LANG['ad_conf_asc'] = 'rosnąco';
$PMF_LANG['mainControlCenter'] = 'Główny';
$PMF_LANG['recordsControlCenter'] = 'Pytania';

// added v2.0.0 - 2007-03-29 by Thorsten
$LANG_CONF['records.defaultActivation'] = array(0 => "checkbox", 1 => "Aktywuj nowe rekordy<br>(domyślnie: wyłączone)");
$LANG_CONF['records.defaultAllowComments'] = array(0 => "checkbox", 1 => "Zezwól na komentarze dla nowych rekordów<br>(default: disallowed)");

// added v2.0.0 - 2007-04-04 by Thorsten
$PMF_LANG['msgAllCatArticles'] = 'Rekordy w tej kategorii';
$PMF_LANG['msgTagSearch'] = 'Otagowane wpisy';
$PMF_LANG['ad_pmf_info'] = 'phpMyFAQ Informacja';
$PMF_LANG['ad_online_info'] = 'Kontrola wersji on-line';
$PMF_LANG['ad_system_info'] = 'Informacje Systemowe';

// added 2.5.0-alpha - 2008-01-25 by Elger
$PMF_LANG['msgRegisterUser'] = 'Zarejestruj się.';
$PMF_LANG["ad_user_loginname"] = 'Nazwa użytkownika:';
$PMF_LANG['errorRegistration'] = 'To pole jest wymagane!';
$PMF_LANG['submitRegister'] = 'Utwórz';
$PMF_LANG['msgUserData'] = 'Informacje o użytkowniku wymagane do rejestracji';
$PMF_LANG['captchaError'] = 'Proszę podać odpowiedni kod captcha!';
$PMF_LANG['msgRegError'] = 'Wystąpiły następujące błędy. Proszę je poprawić:';
$PMF_LANG['successMessage'] = 'Twoja rejestracja przebiegła pomyślnie. Wkrótce otrzymasz maila z potwierdzeniem swoich danych logowania!';
$PMF_LANG['msgRegThankYou'] = 'Dziękujemy za rejestrację!';
$PMF_LANG['emailRegSubject'] = '[%sitename%] Zarejestrowany: nowy użytkownik';

// added 2.5.0-alpha2 - 2009-01-24 by Thorsten
$PMF_LANG['msgMostPopularSearches'] = 'Najpopularniejsze wyszukiwania to:';
$LANG_CONF['main.enableWysiwygEditor'] = array(0 => "checkbox", 1 => "Włącz edytor WYSIWYG<br>(domyślnie: włączone)");

// added 2.5.0-beta - 2009-03-30 by Anatoliy
$PMF_LANG['ad_menu_searchstats'] = 'Statystyki Wyszukiwania';
$PMF_LANG['ad_searchstats_search_term'] = 'Słowo kluczowe';
$PMF_LANG['ad_searchstats_search_term_count'] = 'Liczba';
$PMF_LANG['ad_searchstats_search_term_lang'] = 'Język';
$PMF_LANG['ad_searchstats_search_term_percentage'] = 'Procentowo';

// added 2.5.0-beta - 2009-03-31 by Anatoliy
$PMF_LANG['ad_record_sticky'] = 'Przypnij';
$PMF_LANG['ad_entry_sticky'] = 'Przypnij';
$PMF_LANG['stickyRecordsHeader'] = 'Przypnij FAQs';

// added 2.5.0-beta - 2009-04-01 by Anatoliy
$PMF_LANG['ad_menu_stopwordsconfig'] = 'Blokowane słowa';
$PMF_LANG['ad_config_stopword_input'] = 'Dodaj nowe blokowane słowo';

// added 2.5.0-beta - 2009-04-06 by Anatoliy
$PMF_LANG['msgSendMailDespiteEverything'] = 'Nadal nie ma odpowiedniej odpowiedzi (spowoduje wysłanie maila)';
$PMF_LANG['msgSendMailIfNothingIsFound'] = 'Czy wyszukiwaną odpowiedź wymieniono w powyższych wynikach?';

// added 2.5.0-RC - 2009-05-11 by Anatoliy & Thorsten
$PMF_LANG['msgChooseLanguageToTranslate'] = 'Proszę wybrać język dla tłumaczenia';
$PMF_LANG['msgLangDirIsntWritable'] = 'Folder <strong>/lang</strong> dla plików tłumaczenia nie jest zapisywalny.';
$PMF_LANG['ad_menu_translations'] = 'Tłumaczenia Interfejsu';
$PMF_LANG['ad_start_notactive'] = 'Oczekuje na aktywację';

// added 2.5.0-RC - 2009-05-20 by Anatoliy
$PMF_LANG['msgTransToolAddNewTranslation'] = 'Dodaj nowe tłumaczenie';
$PMF_LANG['msgTransToolLanguage'] = 'Język';
$PMF_LANG['msgTransToolActions'] = 'Akcje';
$PMF_LANG['msgTransToolWritable'] = 'Zapisywalny';
$PMF_LANG['msgEdit'] = 'Edytuj';
$PMF_LANG['msgDelete'] = 'Usuń';
$PMF_LANG['msgYes'] = 'tak';
$PMF_LANG['msgNo'] = 'nie';
$PMF_LANG['msgTransToolSureDeleteFile'] = 'Czy na pewno chcesz usunąć ten plik językowy?';
$PMF_LANG['msgTransToolFileRemoved'] = 'Plik językowy pomyślnie usunięty';
$PMF_LANG['msgTransToolErrorRemovingFile'] = 'Błąd podczas usuwania pliku językowego';
$PMF_LANG['msgVariable'] = 'Zmienna';
$PMF_LANG['msgCancel'] = 'Anuluj';
$PMF_LANG['msgSave'] = 'Zapisz';
$PMF_LANG['msgSaving3Dots'] = 'zapisywanie ...';
$PMF_LANG['msgRemoving3Dots'] = 'usuwanie ...';
$PMF_LANG['msgTransToolFileSaved'] = 'Plik językowy pomyślnie zapisany';
$PMF_LANG['msgTransToolErrorSavingFile'] = 'Błąd podczas zapisywania pliku językowego';
$PMF_LANG['msgLanguage'] = 'Język';
$PMF_LANG['msgTransToolLanguageCharset'] = 'Kodowanie języka';
$PMF_LANG['msgTransToolLanguageDir'] = 'Kierunek języka';
$PMF_LANG['msgTransToolLanguageDesc'] = 'Opis języka';
$PMF_LANG['msgAuthor'] = 'Autor';
$PMF_LANG['msgTransToolAddAuthor'] = 'Dodaj autora';
$PMF_LANG['msgTransToolCreateTranslation'] = 'Utwórz Tłumaczenie';
$PMF_LANG['msgTransToolTransCreated'] = 'Nowe tłumaczenie pomyślnie utworzone';
$PMF_LANG['msgTransToolCouldntCreateTrans'] = 'Nie można utworzyć nowego tłumaczenia';
$PMF_LANG['msgAdding3Dots'] = 'dodawanie ...';
$PMF_LANG['msgTransToolSendToTeam'] = 'Wyślij do zespołu phpMyFAQ';
$PMF_LANG['msgSending3Dots'] = 'wysyłanie ...';
$PMF_LANG['msgTransToolFileSent'] = 'Plik językowy został pomyślnie wysłany do zespołu phpMyFAQ. Dziękujemy bardzo za udostępnienie go.';
$PMF_LANG['msgTransToolErrorSendingFile'] = 'Wystąpił błąd podczas wysyłania pliku językowego';
$PMF_LANG['msgTransToolPercent'] = 'Procentowo';

// added 2.5.0-RC3 - 2009-06-23 by Anatoliy
$LANG_CONF['records.attachmentsPath'] = array(0 => "input", 1 => "Ścieżka w której zostaną zapisane załączniki.<br /><small>Ścieżka względna oznacza folder w katalogu głównym</small>");

// added 2.5.0-RC3 - 2009-06-24 by Anatoliy
$PMF_LANG['msgAttachmentNotFound'] = "Plik, który próbujesz pobrać nie został odnaleziony na tym serwerze";
$PMF_LANG['ad_sess_noentry'] = "Brak wpisu";

// added 2.6.0-alpha - 2009-07-30 by Aurimas Fišeras
//P.S. "One User online" is also possible, since sprintf just ignores extra args
$PMF_LANG["plmsgUserOnline"][0] = "%d użytkownik on-line";
$PMF_LANG["plmsgUserOnline"][1] = "%d użytkowników on-line";

// added 2.6.0-alpha - 2009-08-02 by Anatoliy
$LANG_CONF['main.templateSet'] = array(0 => "select", 1 => "Szablon ustawiony na stosowanie");

// added 2.6.0-alpha - 2009-08-16 by Aurimas Fišeras
$PMF_LANG['msgTransToolRemove'] = 'Usuń';
$PMF_LANG["msgTransToolLanguageNumberOfPlurals"] = "Ilość w liczbie mnogiej";
$PMF_LANG['msgTransToolLanguageOnePlural'] = 'Język ten ma tylko jedną formę liczby mnogiej';
$PMF_LANG['msgTransToolLanguagePluralNotSet'] = "Wsparcie formy liczby mnogiej dla języka %s jest wyłączone (nplurals nie ustawione)";

// added 2.6.0-alpha - 2009-08-16 by Aurimas Fišeras - Plural messages
$PMF_LANG["plmsgHomeArticlesOnline"][0] = "Jest tam %d FAQ online";
$PMF_LANG["plmsgHomeArticlesOnline"][1] = "Są tam %d FAQs on-line";
$PMF_LANG["plmsgViews"][0] = "%d wyświetlenie";
$PMF_LANG["plmsgViews"][1] = "%d wyświetleń";

// added 2.6.0-alpha - 2009-08-30 by Aurimas Fišeras - Plural messages
$PMF_LANG['plmsgGuestOnline'][0] = '%d Gość';
$PMF_LANG['plmsgGuestOnline'][1] = '%d Gości';
$PMF_LANG['plmsgRegisteredOnline'][0] = ' i %d Zarejestrowany';
$PMF_LANG['plmsgRegisteredOnline'][1] = ' i %d Zarejestrowanych';
$PMF_LANG["plmsgSearchAmount"][0] = "%d wynik wyszukiwania";
$PMF_LANG["plmsgSearchAmount"][1] = "%d wyników wyszukiwań";
$PMF_LANG["plmsgPagesTotal"][0] = " %d Strona";
$PMF_LANG["plmsgPagesTotal"][1] = " %d Stron";
$PMF_LANG["plmsgVotes"][0] = "%d Głos";
$PMF_LANG["plmsgVotes"][1] = "%d Głosów";
$PMF_LANG["plmsgEntries"][0] = "%d -FAQ";
$PMF_LANG["plmsgEntries"][1] = "%d FAQi";

// added 2.6.0-alpha - 2009-09-06 by Aurimas Fišeras
$PMF_LANG["rightsLanguage"]['addtranslation'] = "dodaj tłumaczenie";
$PMF_LANG["rightsLanguage"]['edittranslation'] = "edytuj tłumaczenie";
$PMF_LANG["rightsLanguage"]['deltranslation'] = "usuń tłumaczenie";
$PMF_LANG["rightsLanguage"]['approverec'] = "zatwierdź rekordy";

// added 2.6.0-alpha - 2009-09-9 by Anatoliy Belsky
$LANG_CONF["records.enableAttachmentEncryption"] = array(0 => "checkbox", 1 => "Włącz szyfrowanie załączników <br><small>Ignorowane, gdy załączniki są wyłączone</small>");
$LANG_CONF["records.defaultAttachmentEncKey"] = array(0 => "input", 1 => 'Domyślny klucz szyfrowania załącznika <br><small>Ignorowane jeśli szyfrowanie załącznika jest wyłączone</small><br><small><font color="red">WARNING: Do not change this once set and enabled file encryption!!!</font></small>');
$LANG_CONF["records.attachmentsStorageType"] = array(0 => "select", 1 => "Typ magazynowania załączników");
$PMF_LANG['att_storage_type'][0] = 'System plików';
$PMF_LANG['att_storage_type'][1] = 'Baza danych';

// added 2.6.0-alpha - 2009-09-06 by Thorsten
$PMF_LANG['ad_menu_upgrade'] = 'Aktualizacja';
$PMF_LANG['ad_you_shouldnt_update'] = 'Masz najnowszą wersję phpMyFAQ. Nie trzeba uaktualniać.';
$LANG_CONF['security.useSslForLogins'] = array(0 => 'checkbox', 1 => "Zezwalać na logowanie tylko, poprzez połączenia SSL?<br>(domyślnie: wyłączone)");
$PMF_LANG['msgSecureSwitch'] = "Przełącz na tryb bezpiecznego logowania!";

// added 2.6.0-alpha - 2009-10-03 by Anatoliy Belsky
$PMF_LANG['msgTransToolNoteFileSaving']  = 'Proszę zwrócić uwagę, że żaden z plików nie będzie zapisany, dopóki nie klikniesz przycisku zapisz';
$PMF_LANG['msgTransToolPageBufferRecorded'] = 'Bufor strony %d pomyślnie zapisany';
$PMF_LANG['msgTransToolErrorRecordingPageBuffer'] = 'Błąd zapisu bufora strony %d ';
$PMF_LANG['msgTransToolRecordingPageBuffer'] = 'Zapis  buforu strony %d ';

// added 2.6.0-alpha - 2009-11-02 by Anatoliy Belsky
$PMF_LANG['ad_record_active'] = 'Aktywuj';

// added 2.6.0-alpha - 2009-11-01 by Anatoliy Belsky
$PMF_LANG['msgAttachmentInvalid'] = 'Załącznik  jest nieprawidłowy, należy poinformować administratora';

// added 2.6.0-alpha - 2009-11-02 by max
$LANG_CONF['search.numberSearchTerms']   = array(0 => 'input', 1 => 'Ilość wymienionych warunków wyszukiwania');
$LANG_CONF['records.orderingPopularFaqs'] = array(0 => "select", 1 => "Sortowanie, z top FAQ's");
$PMF_LANG['list_all_users']            = 'Lista wszystkich użytkowników';

$PMF_LANG['records.orderingPopularFaqs.visits'] = "lista najczęściej odwiedzanych wpisów";
$PMF_LANG['records.orderingPopularFaqs.voting'] = "lista najczęściej ocenianych wpisów";

// added 2.6.0-alpha - 2009-11-05 by Thorsten
$PMF_LANG['msgShowHelp'] = 'Proszę rozdzielić słowa przecinkiem.';

// added 2.6.0-RC - 2009-11-30 by Thorsten
$PMF_LANG['msgUpdateFaqDate'] = 'aktualizuj';
$PMF_LANG['msgKeepFaqDate'] = 'pozostaw';
$PMF_LANG['msgEditFaqDat'] = 'edytuj';
$LANG_CONF['main.optionalMailAddress'] = array(0 => 'checkbox', 1 => 'Adresy e-mail jako pole obowiązkowe<br>(domyślnie: wyłączone)');

// added v2.6.99 - 2010-11-24 by Gustavo Solt
$LANG_CONF['search.relevance'] = array(0 => 'select', 1 => 'Sortuj według trafności');
$LANG_CONF["search.enableRelevance"] = array(0 => "checkbox", 1 => "Aktywować wsparcie trafności?<br>(domyślnie: wyłączone)");
$PMF_LANG['searchControlCenter'] = 'Wyszukaj';
$PMF_LANG['search.relevance.thema-content-keywords'] = 'Pytanie - Odpowiedź - Słowa kluczowe';
$PMF_LANG['search.relevance.thema-keywords-content'] = 'Pytanie - Słowa kluczowe - Odpowiedź';
$PMF_LANG['search.relevance.content-thema-keywords'] = 'Odpowiedź - Pytanie - Słowa kluczowe';
$PMF_LANG['search.relevance.content-keywords-thema'] = 'Odpowiedź - Słowa kluczowe - Pytanie';
$PMF_LANG['search.relevance.keywords-content-thema'] = 'Słowa kluczowe - Odpowiedź - Pytanie';
$PMF_LANG['search.relevance.keywords-thema-content'] = 'Słowa kluczowe - Pytanie - Odpowiedź';

// added 2.7.0-alpha - 2010-09-13 by Thorsten
$PMF_LANG['msgLoginUser'] = 'Zaloguj';
$PMF_LANG['socialNetworksControlCenter'] = 'Portale społecznościowe';
$LANG_CONF['socialnetworks.enableTwitterSupport'] = array(0 => 'checkbox', 1 => 'Twitter support<br>(domyślnie: wyłączone)');
$LANG_CONF['socialnetworks.twitterConsumerKey'] = array(0 => 'input', 1 => 'Twitter Klucz Klienta');
$LANG_CONF['socialnetworks.twitterConsumerSecret'] = array(0 => 'input', 1 => 'Twitter Sekretne Konsumenta');

// added 2.7.0-alpha - 2010-10-14 by Tom Zeithaml
$LANG_CONF['socialnetworks.twitterAccessTokenKey'] = array(0 => 'input', 1 => 'Twitter Klucz Dostępowe');
$LANG_CONF['socialnetworks.twitterAccessTokenSecret'] = array(0 => 'input', 1 => 'Twitter Dostępowy Secret Token');
$LANG_CONF['socialnetworks.enableFacebookSupport'] = array(0 => 'checkbox', 1 => 'Wsparcie Facebook<br>(domyślnie: wyłączone)');

// added 2.7.0-alpha - 2010-12-21 by Anatoliy Belsky
$PMF_LANG["ad_menu_attachments"] = "FAQ Załączniki";
$PMF_LANG["ad_menu_attachment_admin"] = "Administracja załącznikami";
$PMF_LANG['msgAttachmentsFilename'] = 'Nazwa pliku';
$PMF_LANG['msgAttachmentsFilesize'] = 'Rozmiar pliku';
$PMF_LANG['msgAttachmentsMimeType'] = 'Typ MIME';
$PMF_LANG['msgAttachmentsWannaDelete'] = 'Czy na pewno chcesz usunąć ten załącznik?';
$PMF_LANG['msgAttachmentsDeleted'] = 'Załącznik <strong>pomyślnie</strong> usunięto.';

// added v2.7.0-alpha2 - 2010-01-12 by Gustavo Solt
$PMF_LANG['ad_menu_reports'] = 'Raporty';
$PMF_LANG["ad_stat_report_fields"] = "Pola";
$PMF_LANG["ad_stat_report_category"] = "Kategoria";
$PMF_LANG["ad_stat_report_sub_category"] = "Subkategoria";
$PMF_LANG["ad_stat_report_translations"] = "Tłumaczenia";
$PMF_LANG["ad_stat_report_language"] = "Język";
$PMF_LANG["ad_stat_report_id"] = "ID FAQ";
$PMF_LANG["ad_stat_report_sticky"] = "Podepnij FAQ";
$PMF_LANG["ad_stat_report_title"] = "Pytanie";
$PMF_LANG["ad_stat_report_creation_date"] = "Data";
$PMF_LANG["ad_stat_report_owner"] = "Autor oryginału";
$PMF_LANG["ad_stat_report_last_modified_person"] = "Ostatni autor";
$PMF_LANG["ad_stat_report_url"] = "Adres URL";
$PMF_LANG["ad_stat_report_visits"] = "Odwiedziny";
$PMF_LANG["ad_stat_report_make_report"] = "Generuj Raport";
$PMF_LANG["ad_stat_report_make_csv"] = "Eksportuj do CSV";

// added v2.7.0-alpha2 - 2010-02-05 by Thorsten Rinne
$PMF_LANG['msgRegistration'] = 'Rejestracja';
$PMF_LANG['msgRegistrationCredentials'] = 'Aby się zarejestrować należy podać swoje imię, swój login i adres e-mail!';
$PMF_LANG['msgRegistrationNote'] = 'Po udanej rejestracji otrzymasz wkrótce odpowiedź administratora z zatwierdzeniem rejestracji.';

// added v2.7.0-beta - 2011-06-13 by Thorsten
$PMF_LANG['ad_entry_changelog_history'] = "Historia zmian";

// added v2.7.0-beta2 - 2011-06-22 by Thorsten
$LANG_CONF['security.ssoSupport'] = array(0 => 'checkbox', 1 => 'Jednokrotne Logowanie Wsparcia<br>(domyślnie: wyłączone)');
$LANG_CONF['security.ssoLogoutRedirect'] = array(0 => 'input', 1 => 'Jednokrotne Logowanie za Pomocą, URL usługi przekierowania wylogowania');
$LANG_CONF['main.dateFormat'] = array(0 => 'input', 1 => 'Format daty<br>(domyślnie: Y-m-d H:i)');
$LANG_CONF['security.enableLoginOnly'] = array(0 => 'checkbox', 1 => 'Uzupełnij zabezpieczone FAQ<br>(domyślnie: wyłączone)');

// added v2.7.0-RC - 2011-08-18 by Thorsten
$PMF_LANG['securityControlCenter'] = 'Bezpieczeństwo';
$PMF_LANG['ad_search_delsuc'] = 'Warunki wyszukiwania zostały pomyślnie usunięte.';
$PMF_LANG['ad_search_delfail'] = 'Warunki wyszukiwania nie zostały usunięte.';

// added 2.7.1 - 2011-09-30 by Thorsten
$PMF_LANG['msg_about_faq'] = 'O tym FAQ';
$LANG_CONF['security.useSslOnly'] = array(0 => 'checkbox', 1 => 'FAQ tylko z SSL<br>(domyślnie: wyłączone)');
$PMF_LANG['msgTableOfContent'] = 'Spis Treści';

// added 2.7.5 - 2012-03-02 by Thorsten
$PMF_LANG["msgExportAllFaqs"] = "Drukuj wszystko jako PDF";
$PMF_LANG["ad_online_verification"] = "Weryfikacji kontrolna online";
$PMF_LANG["ad_verification_button"] = "Kliknij, aby zweryfikować Twoją instalację phpMyFAQ";
$PMF_LANG["ad_verification_notokay"] = "Twoja wersja phpMyFAQ ma lokalne zmiany:";
$PMF_LANG["ad_verification_okay"] = "Twoja wersja phpMyFAQ została pomyślnie zweryfikowana.";

// added v2.8.0-alpha - 2011-09-29 by Thorsten
$PMF_LANG['ad_menu_searchfaqs'] = 'Wyszukaj FAQs';

// added v2.8.0-alpha - 2012-01-13 by Peter
$LANG_CONF["records.enableCloseQuestion"] = array(0 => "checkbox", 1 => "Zamknąć otwarte pytanie po odpowiedzi?");
$LANG_CONF["records.enableDeleteQuestion"] = array(0 => "checkbox", 1 => "Usunąć otwarte pytanie po odpowiedzi?");
$PMF_LANG["msg2answerFAQ"] = "Odpowiedziane";

// added v2.8.0-alpha - 2012-01-16 by Thorsten
$PMF_LANG["headerUserControlPanel"] = 'Panel Kontrolny Użytkownika';

// added v2.8.0-alpha2 - 2012-03-15 by Thorsten
$PMF_LANG["rememberMe"] = 'Zaloguj mnie automatycznie następnym razem';
$PMF_LANG["ad_menu_instances"] = "FAQ Multi sites";

// added v2.8.0-alpha2 - 2012-07-07 by Anatoliy
$LANG_CONF['records.autosaveActive'] = array(0 => 'checkbox', 1 => 'Aktywuj autozapis FAQ');
$LANG_CONF['records.autosaveSecs'] = array(0 => 'input', 1 => 'Interwał autozapisu w sekundach, domyślnie 180');

// added v2.8.0-alpha2 - 2012-08-06 by Thorsten
$PMF_LANG['ad_record_inactive'] = 'FAQs nieaktywny';
$LANG_CONF["main.maintenanceMode"] = array(0 => "checkbox", 1 => "Ustaw FAQ w trybie konserwacji");
$PMF_LANG['msgMode'] = "Tryb";
$PMF_LANG['msgMaintenanceMode'] = "FAQ jest w konserwacji";
$PMF_LANG['msgOnlineMode'] = "FAQ jest online";

// added v2.8.0-alpha3 - 2012-08-30 by Thorsten
$PMF_LANG['msgShowMore'] = "pokaż więcej";
$PMF_LANG['msgQuestionAnswered'] = "Pytanie odpowiedziane";
$PMF_LANG['msgMessageQuestionAnswered'] = "Na Twoje pytanie %s odpowiedziano. Proszę sprawdzić tutaj:";

// added v2.8.0-beta - 2012-12-24 by Thorsten
$LANG_CONF["records.randomSort"] = array(0 => "checkbox", 1 => "Sortuj losowo FAQs<br>(domyślnie: wyłączone)");
$LANG_CONF['main.enableWysiwygEditorFrontend'] = array(0 => "checkbox", 1 => "Włącz pakiet edytora WYSIWYG w witrynie<br>(domyślnie: wyłączone)");

// added v2.8.0-beta3 - 2013-01-15 by Thorsten
$LANG_CONF["main.enableGravatarSupport"] = array(0 => "checkbox", 1 => "Wsparcie Gravatar<br>(domyślnie: wyłączone)");

// added v2.8.0-RC - 2013-01-29 by Thorsten
$PMF_LANG["ad_stopwords_desc"] = "Proszę wybrać język, aby dodać lub edytować odrzucane słowa.";
$PMF_LANG["ad_visits_per_day"] = "Odwiedzin dziennie";

// added v2.8.0-RC2 - 2013-02-17 by Thorsten
$PMF_LANG["ad_instance_add"] = "Dodaj nową instancję phpMyFAQ multi site";
$PMF_LANG["ad_instance_error_notwritable"] = "Folder /multisite jest nie zapisywalny.";
$PMF_LANG["ad_instance_url"] = " URL instancji";
$PMF_LANG["ad_instance_path"] = "Ścieżka instancji";
$PMF_LANG["ad_instance_name"] = "Nazwa instancji";
$PMF_LANG["ad_instance_email"] = "Twój e-mail administratora";
$PMF_LANG["ad_instance_admin"] = "Login administratora";
$PMF_LANG["ad_instance_password"] = "Hasło administratora";
$PMF_LANG["ad_instance_hint"] = "Uwaga: To zajmie kilka sekund, aby utworzyć nową instancję phpMyFAQ!";
$PMF_LANG["ad_instance_button"] = "Zapisz instancję";
$PMF_LANG["ad_instance_error_cannotdelete"] = "Nie można usunąć instancji ";
$PMF_LANG["ad_instance_config"] = "Konfiguracja instancji";

// added v2.8.0-RC3 - 2013-03-03 by Thorsten
$PMF_LANG["msgAboutThisNews"] = "O tej aktualności";

// added v.2.8.1 - 2013-06-23 by Thorsten
$PMF_LANG["msgAccessDenied"] = "Odmowa dostępu.";

// added v.2.8.21 - 2015-02-17 by Thorsten
$PMF_LANG['msgSeeFAQinFrontend'] = 'Zobacz FAQ w Witrynie';

// added v.2.9.0-alpha - 2013-12-26 by Thorsten
$PMF_LANG["msgRelatedTags"] = 'Dodaj Słowa Wyszukiwania';
$PMF_LANG["msgPopularTags"] = 'Popularne Wyszukiwania Słowa';
$LANG_CONF["search.enableHighlighting"] = array(0 => "checkbox", 1 => "Podświetl wyszukiwane hasła");
$LANG_CONF["main.enableRssFeeds"] = array(0 => "checkbox", 1 => "Kanały RSS<br>(domyślnie: włączone)");
$LANG_CONF["records.allowCommentsForGuests"] = array(0 => "checkbox", 1 => "Zezwól na komentowanie przez gości<br>(domyślnie: włączone)");
$LANG_CONF["records.allowQuestionsForGuests"] = array(0 => "checkbox", 1 => "Zezwól na dodanie pytania przez gości<br>(domyślnie: włączone)");
$LANG_CONF["records.allowNewFaqsForGuests"] = array(0 => "checkbox", 1 => "Zezwól na dodanie nowego FAQs<br>(domyślnie: włączone)");
$PMF_LANG["ad_searchterm_del"] = 'Usuń wszystkie zarejestrowane wyszukiwania haseł';
$PMF_LANG["ad_searchterm_del_suc"] = 'Usunięto pomyślnie wszystkie kryteria wyszukiwania.';
$PMF_LANG["ad_searchterm_del_err"] = 'Nie udało się usunąć wszystkich kryteriów wyszukiwania.';
$LANG_CONF["records.hideEmptyCategories"] = array(0 => "checkbox", 1 => "Ukryj puste kategorie<br>(domyślnie: wyłączone)");
$LANG_CONF["search.searchForSolutionId"] = array(0 => "checkbox", 1 => "Wyszukaj ID rozwiązania<br>(domyślnie: włączone)");
$LANG_CONF["socialnetworks.disableAll"] = array(0 => "checkbox", 1 => "Wyłącz wszystkie sieci społecznościowe<br>(domyślnie: wyłączone)");
$LANG_CONF["main.enableGzipCompression"] = array(0 => "checkbox", 1 => "Włącz kompresję GZIP<br>(domyślnie: włączone)");

// added v2.9.0-alpha2 - 2014-08-16 by Thorsten
$PMF_LANG["ad_tag_delete_success"] = "Znacznik został pomyślnie usunięty.";
$PMF_LANG["ad_tag_delete_error"] = "Znacznik nie został usunięty, ponieważ wystąpił błąd.";
$PMF_LANG["seoCenter"] = "S-E-O";
$LANG_CONF["seo.metaTagsHome"] = array(0 => "select", 1 => "Meta Tagi strony startowej");
$LANG_CONF["seo.metaTagsFaqs"] = array(0 => "select", 1 => "Meta Tagi FAQs");
$LANG_CONF["seo.metaTagsCategories"] = array(0 => "select", 1 => "Meta Tagi stron kategorii");
$LANG_CONF["seo.metaTagsPages"] = array(0 => "select", 1 => "Meta Tagi stron statycznych");
$LANG_CONF["seo.metaTagsAdmin"] = array(0 => "select", 1 => "Meta Tagi Admin");
$PMF_LANG["msgMatchingQuestions"] = "Następujące wyniki ściśle dopasowane do Twojego pytania:";
$PMF_LANG["msgFinishSubmission"] = "Jeżeli żadna z powyższych sugestii nie pasuje do Twojego pytania, kliknij przycisk poniżej aby zakończyć przesłanie pytania.";
$LANG_CONF["main.enableLinkVerification"] = array(0 => "checkbox", 1 => "Włącz automatyczną kontrolę linku<br>(domyślnie: włączone)");
$LANG_CONF['spam.manualActivation'] = array(0 => 'checkbox', 1 => 'Ręcznie aktywuj nowych użytkowników (domyślnie: włączone)');

// added v2.9.0-alpha2 - 2014-10-13 by Christopher Andrews ( Chris--A )
$PMF_LANG['mailControlCenter'] = 'Konfiguracja poczty';
$LANG_CONF['mail.remoteSMTP'] = array(0 => 'checkbox', 1 => 'Użyj zdalnego serwera SMTP (domyśnie: wyłączone)');
$LANG_CONF['mail.remoteSMTPServer'] = array(0 => 'input', 1 => 'Adres serwera');
$LANG_CONF['mail.remoteSMTPUsername'] = array(0 => 'input', 1 => 'Nazwa użytkownika');
$LANG_CONF['mail.remoteSMTPPassword'] = array(0 => 'password', 1 => 'Hasło');
$LANG_CONF['security.enableRegistration'] = array('checkbox', 'Włącz rejestrację dla odwiedzających<br>(domyśnie: aktywowane)');

// added v2.9.0-alpha3 - 2015-02-08 by Thorsten
$LANG_CONF['main.customPdfHeader'] = array('area', 'Własny Nagłówek PDF (HTML dozwolony)');
$LANG_CONF['main.customPdfFooter'] = array('area', 'Własna Stopka  PDF (HTML dozwolony)');
$LANG_CONF['records.allowDownloadsForGuests'] = array('checkbox', 'Zezwól na pobieranie dla gości<br>(domyślnie: wyłączone)');
$PMF_LANG["ad_msgNoteAboutPasswords"] = "Uwaga! Po wpisaniu hasła, zmień hasło użytkownika.";
$PMF_LANG["ad_delete_all_votings"] = "Wyczyścić wszystkie głosowania";
$PMF_LANG["ad_categ_moderator"] = "Moderatorzy";
$PMF_LANG['ad_clear_all_visits'] = "Wyczyścić wszystkie wizyty";
$PMF_LANG['ad_reset_visits_success'] = 'Wizyty zostały pomyślnie zresetowane.';
$LANG_CONF['main.enableMarkdownEditor'] = array('checkbox', 'Włącz formatowanie edytora<br>(domyślnie: wyłączone)');

// added v2.9.0-beta - 2015-09-27 by Thorsten
$PMF_LANG['faqOverview'] = 'Przegląd FAQ';
$PMF_LANG['ad_dir_missing'] = 'Brakuje katalogu %s .';
$LANG_CONF['main.enableSmartAnswering'] = array('checkbox', 'Włącz inteligentne odpowiadanie na pytania użytkowników<br>(domyśnie: aktywowane)');

// added v2.9.0-beta2 - 2015-12-23 by Thorsten
$LANG_CONF['search.enableElasticsearch'] = array('checkbox', 'Włącz wsparcie Elasticsearch<br>(domyślnie: wyłączone)');
$PMF_LANG['ad_menu_elasticsearch'] = 'Konfiguracja Elasticsearch';
$PMF_LANG['ad_es_create_index'] = 'Utwórz Index';
$PMF_LANG['ad_es_drop_index'] = 'Usuń Index';
$PMF_LANG['ad_es_bulk_index'] = 'Pełny import';
$PMF_LANG['ad_es_create_index_success'] = 'Index pomyślnie utworzony.';
$PMF_LANG['ad_es_drop_index_success'] = 'Index pomyślnie usunięty.';
$PMF_LANG['ad_export_generate_json'] = 'Utwórz plik JSON';
$PMF_LANG['ad_image_name_search'] = 'Wyszukaj nazwę obrazu';

// added v2.9.0-RC - 2016-02-19 by Thorsten
$PMF_LANG['ad_admin_notes'] = 'Notatki Prywatne';
$PMF_LANG['ad_admin_notes_hint'] = '%s (widoczne tylko dla redakcji)';

<?php

return array(

    // Standard messages
    "item_created"                      => "Nieuwe :item :rel. gemaakt",
    "item_updated"                      => ":item :rel. bijgewerkt",
    "item_deleted"                      => ":item :rel. verwijderd",

    // Custom messages
    "ip_ban_created"                    => "Nieuwe blokkade actief voor ip :rel.",
    "ip_ban_updated"                    => "Blokkade bijgewerkt voor ip :rel.",
    "ip_ban_deleted"                    => "Blokkade verwijderd voor ip :rel.",
    "banned_ip_on_login"                => "IP :rel voor 15 minuten geblokkeerd.",

    "ip_whitelist_created"              => "IP :rel toegevoegd aan whitelist.",
    "ip_whitelist_updated"              => "IP whitelist bijgewerkt voor IP :rel.",
    "ip_whitelist_deleted"              => "IP whitelist verwijderd voor IP :rel.",

    "system_cleanup"                    => "Systeem opschoning uitgevoerd op :rel.",

    "api_failed_login"                  => "IP :rel liet na te autenticeren voor API.",

    "user_successful_login"             => "Ingelogd op servicedesk.",
    "user_failed_login"                 => "Autenticatie mislukt.",
    "user_successful_logout"            => "Uitgelogd uit servicedesk.",

    "user_registered"                   => "Nieuwe gebruiker geregistreerd.",
    "user_confirmed"                    => "Account bevestigd.",
    "user_password_set"                 => "Stel een wachtwoord in voor het account.",
    "user_password_reset"               => "Reset het wachtwoord voor het account.",

    "user_added_to_organisation"        => "Gebruiker :rel toegevoegd aan organisatie :new_value.",
    "user_removed_from_organisation"    => "Gebruiker :rel verwijder uit organisatie :old_value.",
    "user_profile_updated"              => "Gebruikersprofiel bijgewerkt.",
    "user_left_organisation"            => ":rel. heeft de organisatie verlaten",
    "user_organisation_emptied"         => "Alle gebruikers zijn verwijderd uit organisatie :rel.",
    "user_organisation_updated"         => ":rel's organisatietoegangniveau is veranderd van :old_value in :new_value.",
    "organisation_membership_updated"   => "Gebruikerslidmaatschap bijgewerkt voor organisatie :rel.",
    "organisation_profile_updated"      => "Organisatieprofiel bijgewerkt voor :rel.",
    "organisation_owner_updated"        => "Organisatie eigendom gewijzigd van :rel naar :new_value.",

    "mass_email_queued"                 => ":new_value e-mails in wachtrij.",
    "mass_email_sent"                   => ":new_value e-mails verstuurd.",

    "email_queue_deleted"               => "Mail voor :rel. verwijderd",

    "scheduled_task_run"                => "Cron :rel is handmatig uitgevoerd.",

    "selfservice_article_upvoted"       => "Positieve reactie op artikel :rel.",
    "selfservice_article_downvoted"     => "Negatieve reactie op artikel :rel.",
    "selfservice_comment_posted"        => "Nieuw geplaatst :rel.",
    "selfservice_comment_upvoted"       => "Up-vote :rel van :old_value naar :new_value.",
    "selfservice_comment_downvoted"     => "Down-vote :rel van :old_value naar :new_value.",

    "ticket_opened"                     => "Nieuw ticket geopend #:rel.",
    "ticket_opened_on_behalf"           => "Nieuw ticket geopend #:rel uit naam van :new_value.",
    "ticket_opened_email"               => "E-mail geïmporteerd als nieuw ticket #:rel.",

    "ticket_message_reply"              => "Nieuw antwoord op ticket #:rel.",
    "ticket_message_note"               => "Nieuwe notitie op ticket #:rel.",
    "ticket_message_deleted"            => "Verwijderd bericht in ticket #:rel.",

    "ticket_user_updated"               => "Gebruiker bijgewerkte op ticket #:rel van :old_value naar :new_value.",
    "ticket_subject_updated"            => "Onderwerp bijgewerkt van ticket #:rel.",
    "ticket_department_updated"         => "Afdeling bijgewerkt van ticket #:rel van :old_value naar :new_value.",
    "ticket_status_updated"             => "Status bijgewerkt van ticket #:rel van :old_value naar :new_value.",
    "ticket_priority_updated"           => "Prioriteit bijgewerkt van ticket #:rel van :old_value naar :new_value.",
    "ticket_tag_added"                  => "Tag :new_value toegevoegd aan ticket #:rel.",
    "ticket_tag_updated"                => "Tags vanticket #:rel. zijn bijgewerkt",
    "ticket_tag_removed"                => "Tag :new_value verwijder van ticket #:rel.",
    "ticket_slaplan_updated"            => "SLA op ticket #:rel bijgewerkt van :old_value naar :new_value.",
    "ticket_duetime_updated"            => "Deadline op ticket #:rel bijgesteld naar :new_value.",
    "ticket_customfield_updated"        => "Aangepast velden op ticket #:rel. bijgewerkt",
    "ticket_converted_user"             => "Intern ticket #:rel omgezet naar gebruikerticket.",
    "ticket_converted_internal"         => "Gebruiker ticket #:rel omgezet naar intern ticket.",

    "ticket_assigned_operator"          => "Ticket #:rel. op naam gezet van :new_value",
    "ticket_unassigned_operator"        => "Ticket #:rel. staat niet meer op naam van :new_value",
    "ticket_assigned_self"              => "Ticket #:rel. op eigen naam toegewezen",
    "ticket_assigned_updated"           => "Toegewezen operators op ticket #:rel. bijgewerkt",

    "ticket_locked"                     => "Locked ticket #:rel.",
    "ticket_unlocked"                   => "Unlocked ticket #:rel.",
    "ticket_locked_reply"               => "Antwoord kon niet worden toegevoegd aan locked ticket #:rel.",

    "ticket_unmerged"                   => "Ticket :rel is gesplist.",

    "ticket_user_blocked"               => "Geblokkeerde e-mail :new_value (van gebruiker op ticket #:rel).",

    "ticket_closed"                     => "Ticket #:rel is gesloten.",
    "ticket_inactive_closed"            => "Inactief inactive ticket #:rel geslotenn van status :old_value.",
    "ticket_awaiting_response"          => "Wacht-nog-op-antwoord e-mail verstuurd naar gebruiker van ticket #:rel.",

    "ticket_split_from"                 => "Berichten gesplitst van oud ticket #:rel naar nieuw ticket #:new_value.",
    "ticket_split_to"                   => "Berichten gesplitst van oud ticket #:old_value naar nieuw ticket #:rel.",

    "ticket_attachment_saved"           => "Bijlage toegevoegd aan ticket #:rel.",
    "ticket_attachment_deleted"         => "bijlage verwijderd van ticket #:rel.",

    "ticket_throttled"                  => "Nieuw ticket van :rel geweigerd i.v.m throttling.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Bijlage ':new_value' toegevoegd aan artikel ID :rel.",
    "selfservice_attachment_deleted"    => "bijlaage ':new_value' verwijderd van artikel ID :rel.",
    "ticket_unassigned_self"            => "Toewijzing van ticket #:rel. aan uzelf verwijderd",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Antwoord kon niet worden toegevoegd omdat het ticket hoort bij een afgesloten merk #:rel.",
    "personal_signatures_updated"       => "Persoonlijke handtekening bijgewerkt.",
    "check_email_failed"                => "Error: Kon geen e-mail downloaden van account :old_value: ':rel'.",
    "invalid_department_brand"          => "Kon voor ticket #:rel de afdeling niet instellen op ':new_value' omdat deze afdeling niet bij dit merk hoort.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "E-mail met onderwerp ':extra_rel1' verstuurd naar :rel.",
    "sent_template_email_to"            => "':extra_rel1' e-mail verstuurd naar :rel.",
    "sent_ticket_email_to_user"         => "':extra_rel1' e-mail verstuurd naar gebruiker voor ticket #:rel.",
    "sent_email_to_operators"           => "':extra_rel1' e-mail verstuurd naar operators.",
    "sent_ticket_email_to_operators"    => "':extra_rel1' e-mail verstuurd naar operators voor ticket #:rel.",
    "sent_email_to_operator_group"      => "':extra_rel1' e-mail verstuurd naar operatorgroep ':new_value' voor ticket #:rel.",
    "ticket_macro_applied"              => "De macro ':new_value' is uitgevoerd op ticket #:rel.",
    "ticket_macro_automatic"            => "De macro ':new_value' is automatisch uitgevoerd op ticket #:rel.",
    "email_template_not_found"          => "E-mail template ID ':new_value' niet gevonden, mail wordt niet verstuurd.",
    "private_conversation_started"      => "Een conversatie is gestart met :rel.",
    "private_message_sent"              => "Een bericht is verstuurd naar :rel.",
    "not_imported_replies_disabled"     => "Een e-mail :extra_rel1 was ontvangen voor ticket #:rel, maar was niet geimporteerd omdat emailantwoorden zijn uitgeschakeld.",
    "not_imported_ticket_locked"        => "Een e-mail :extra_rel1 was ontvangen voor ticket #:rel, maar was niet geimporteerd omdat het ticket is gelocked.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Ticket gebruiker is toegevoegd aan gebruikersgroep :new_value.",
    "ticket_user_removed_from_group"    => "Ticket gebruiker is verwijderd uit gebruikersgroep :old_value.",
    "email_on_behalf"                   => ":extra_rel2 doorgestuurd in naam van  ':extra_rel1' in ticket #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Verzonden ':extra_rel1' e-mail naar :new_value, afdeling accepteert geen e-mails van niet-geregistreerde gebruikers. ",
    "deleted_user"                      => ":item ':rel' met e-mail ':email_address' (ID :user_id) is verwijderd.",
    "linked_ticket"                     => "Ticket #:rel is gelinkt aan ticket :extra_rel1.",
    "unlinked_ticket"                   => "Link tussen ticket #:rel met ticket :extra_rel1 verwijderd.",
    "email_queue_attachment_deleted"    => "Bijlage verwijderd ':old_value' van in de wachtrij geplaatste e-mail ':rel'.",
    "forward_ticket_email"              => "Ticket #:rel doorgestuurd naar derde-partij, bekijk ':extra_rel1' e-mail.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => ":rel bijgewerkt door :extra_rel1.",
    "selfservice_comment_status"        => "Gewijzigde status van :rel door :extra_rel1 van :old_value naar :new_value.",
    "selfservice_comment_deleted"       => "Reactie verwijderd door :extra_rel1.",
    "ticket_message_posted"             => "Een nieuwe :extra_rel1 gepost op ticket #:rel.",
    "ticket_message_edited"             => "Heeft een :extra_rel1 in ticket #:rel.",
    "email_send_failed"                 => "Kan e-mail niet verzenden .",
    "ticket_brand_updated"              => "Het merk op van ticket #:rel is bijgewerkt van :old_value naar :new_value.",
    "export_scheduled"                  => "Een export van gebruiker :rel is gepland.",
    "deleted_inactive_records"          => "Automatisch verwijderd :old_value inactief :rel.",
    "deleted_old_records"               => "Oude :rel records zijn automatisch verwijderd.",
    "sent_email_to_user_group"          => "E-mail in wachtrij geplaatst naar gebruikersgroep ':new_value' voor ticket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Monitort ticket #:rel.",
    "ticket_unwatching"                 => "Monitort ticket #:rel niet meer.",
    "ticket_watch_operator"             => "Laat :new_value ticket #:rel monitoren.",
    "ticket_unwatch_operator"           => "Laat :new_value ticket #:rel niet meer monitoren.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Bevestig eigendom van e-mailadres namens gebruiker :rel.",
    "ticket_department_email_updated"   => "De afdelings-e-mail op ticket #:rel bijgewerkt van :old_value naar :new_value.",
    "ticket_watching_updated"           => "Monitorende operators op ticket #:rel bijgewerkt.",
    "ticket_deleted"                    => "Ticket ':old_value' (#:rel) permanent verwijderd.",
    "ticket_trashed"                    => "Ticket #:rel verplaatst naar de prullenbak.",
    "ticket_restored"                   => "Ticket #:rel herstelt vanuit de prullenbak.",
    "emptied_ticket_trash"              => "Automatisch de ticketprullenbak van ':old_value' records opgeschoond.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "Nieuwe opvolging ingesteld op ticket  #:rel.",
    "ticket_followup_updated"           => "Opvolging bijgewerkt op ticket #:rel.",
    "ticket_followup_deleted"           => "Opvolging verwijderd op ticket #:rel.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Artikel :rel is neutraal beoordeeld.",

    /*
     * 4.1.0
     */
    "user_merged"                       => "Gebruiker :old_value samengevoegd in gebruiker :rel.",
    "user_organisation_merged"          => "Gebruikersorganisatie :old_value samengevoegd in gebruikersorganisatie :rel.",

    /*
     * 4.2.0
     */
    "operator_reply_templates_updated"  => ":rel's antwoordsjablonen bijgewerkt.",

    /*
     * 5.0.0
     */
    "addon_activated"                   => "Geactiveerd :item (add-on) :rel.",
    "addon_deactivated"                 => "Gedeactiveerd :item (add-on) :rel.",
    "addon_installed"                   => "Geïnstalleerd :item (add-on) :rel.",
    "addon_uninstalled"                 => "Gedeïnstalleerd :item (add-on) :rel.",
    "addon_cancelled"                   => "Geannuleerd :item (add-on) :rel.",
    "addon_updated"                     => "Bijgewerkt :item (add-on) :rel naar versie :new_value.",
    "ticket_reply_duetime_updated"      => "De antwoorddeadline op ticket #:rel is bijgewerkt naar :new_value.",
    "ticket_resolve_duetime_updated"    => "De oplosdeadline op ticket #:rel is bijgewerkt naar :new_value.",
    "ticket_duetime_unset"              => "Deadline van ticket #:rel is verwijderd.",
    "ticket_reply_duetime_unset"        => "De antwoorddeadline op ticket #:rel is verwijderd.",
    "ticket_resolve_duetime_unset"      => "De oplosdeadline op ticket #:rel is verwijderd.",
    "ticket_duetime_paused"             => "Deadline op ticket #:rel is gepauzeerd tot nieuw antwoord van gebruiker.",
    "ticket_duetime_unpaused"           => "De deadlines op ticket #:rel zijn hervat.",
    "user_email_verified"               => "Het e-mailadres is geverifieerd.",
    "marked_email_as_verified"          => "Eigenaarschap van het e-mailadres is namens gebruiker :rel geverifieerd.",
    "user_invited_to_organisation"      => "Gebruiker :rel is uitgenodigd voor organisatie :extra_rel1.",
    "user_accepted_organisation_invite" => "Gebruiker :rel heeft de uitnodiging voor organisatie :extra_rel1 geaccepteerd.",
    "user_additional_email_verified"    => "Een extra e-mailadres (:new_value) is geverifieerd.",
    "export_generated"                  => "Export :new_value van gebruiker :rel is gegenereerd en opgeslagen op het systeem.",
    "export_deleted"                    => "Export :old_value van gebruiker :rel is uit het systeem verwijderd.",
    "user_export_generated"             => "Export :new_value van gebruiker :rel is gegenereerd en opgeslagen op het systeem.",

    /*
     * 5.0.2
     */
    "personal_reply_templates_updated"  => "Hun antwoordsjablonen bijgewerkt.",

    /*
     * 5.1.0
     */
    "ticket_deleted_attachment"         => "Verwijderde bijlage ':old_value' van ticket #:rel.",
    "user_added_to_group"               => "Gebruiker :rel toegevoegd aan gebruikersgroep :new_value.",
    "user_removed_from_group"           => "Gebruiker :rel verwijderd uit gebruikersgroep :old_value.",
    "operator_added_to_group"           => "Operator :rel toegevoegd aan operatorgroep :new_value.",
    "operator_removed_from_group"       => "Operator :rel verwijderd uit operatorgroep :old_value.",

    /*
     * 5.2.0
     */
    "background_job_deleted"            => "Verwijderde achtergrondtaak :rel.",
    "background_job_retried"            => "Opnieuw geprobeerde achtergrondtaak :rel.",

    /*
     * 5.3.0
     */
    "operator_password_set"             => "Een wachtwoord voor het account ingesteld.",
    "password_reset_sent"               => "Link om het wachtwoord te resetten verzonden naar :rel.",

    /*
     * 5.4.0
     */
    "ticket_feedback_rating"            => "Ticket #:rel beoordeeld als :extra_rel1.", // Rated ticket #123 as 'general.good / general.bad / general.neutral'.
    "ticket_feedback_saved"             => ":extra_rel1 opgeslagen voor ticket #:rel.", // Saved (lowercase ticket.feedback) on ticket #123
    "selfservice_feedback_saved"        => ":extra_rel1 opgeslagen voor artikel :rel.", // Saved (lowercase ticket.feedback) on article 'Foo bar'

    /*
     * 5.5.0
     */
    "ticket_pinned_message"             => ":extra_rel1 vastgezet in ticket #:rel.", // Pinned message (lowercase general.message) on ticket #123.
    "ticket_unpinned_message"           => ":extra_rel1 losgemaakt van ticket #:rel.", // Unpinned message (lowercase general.message) on ticket #123.

    /*
     * 5.7.0
     */
    "operator_notifications_updated"    => "De meldingsvoorkeuren van :rel bijgewerkt.", // Updated Joe Blog's notification preferences.

    /*
     * 6.0.0
     */
    "ticket_merged"                     => ":new_value samengevoegd met ticket #:rel.",
    "ticket_added_cc"                   => ":new_value toegevoegd aan de CC-adreslijst van ticket #:rel.",
    "ticket_removed_cc"                 => ":old_value verwijderd uit de CC-adreslijst van ticket #:rel.",
    "ticket_slaplan_set"  => "Het SLA-plan van ticket #:rel bijgewerkt van Geen naar :new_value.",
    "ticket_slaplan_removed"  => "Het SLA-plan van ticket #:rel bijgewerkt van :old_value naar Geen.",
    "sent_feedback_email_to_operators"  => "E-mail met ontvangen feedback verzonden naar operators voor ticket #:rel.",
    "ticket_added_cc_multiple"          => ":cc_emails toegevoegd aan de CC-adreslijst van ticket #:rel.",
    "timeline_ticket_added_cc_multiple" => ":user_name heeft CC :cc_emails toegevoegd",
    "ticket_removed_cc_multiple"        => ":cc_emails verwijderd uit de CC-adreslijst van ticket #:rel.",
    "timeline_ticket_removed_cc_multiple" => ":user_name heeft CC :cc_emails verwijderd",
    "ticket_assigned_operators_multiple" => ":operators toegewezen aan ticket #:rel.",
    "timeline_ticket_assigned_operators_multiple" => ":user_name heeft :operators toegewezen",
    "ticket_unassigned_operators_multiple" => ":operators verwijderd van ticket #:rel.",
    "timeline_ticket_unassigned_operators_multiple" => ":user_name heeft de toewijzing van :operators verwijderd",
    "ticket_watch_operator_multiple"    => ":operators volgen nu ticket #:rel.",
    "timeline_ticket_watch_operator_multiple" => ":user_name heeft :operators toegevoegd als volgers",
    "ticket_unwatch_operator_multiple"  => ":operators volgen ticket #:rel niet langer.",
    "timeline_ticket_unwatch_operator_multiple"  => ":user_name heeft :operators gestopt met volgen",
    "ticket_tag_added_single"           => "Label :formatted_items toegevoegd aan ticket #:rel.",
    "timeline_ticket_tag_added_single"  => ":user_name heeft label :formatted_items toegevoegd",
    "ticket_tag_removed_single"         => "Label :formatted_items verwijderd van ticket #:rel.",
    "timeline_ticket_tag_removed_single" => ":user_name heeft label :formatted_items verwijderd",
    "ticket_tag_added_multiple"         => "Labels :formatted_items toegevoegd aan ticket #:rel.",
    "timeline_ticket_tag_added_multiple" => ":user_name heeft labels :formatted_items toegevoegd",
    "ticket_tag_removed_multiple"       => "Labels :formatted_items verwijderd van ticket #:rel.",
    "timeline_ticket_tag_removed_multiple" => ":user_name heeft labels :formatted_items verwijderd",
    "ticket_merged_multiple"            => "Tickets :ticket_numbers samengevoegd met ticket #:rel.",
    "timeline_ticket_merged_multiple"   => ":user_name heeft :ticket_numbers samengevoegd met dit ticket",
    "linked_tickets_multiple"           => "Ticket #:rel gekoppeld aan tickets :extra_rel*.",
    "timeline_linked_tickets_multiple"  => ":user_name heeft gekoppeld aan :extra_rel*",
    "unlinked_tickets_multiple"         => "Koppeling tussen ticket #:rel en tickets :extra_rel* verwijderd.",
    "timeline_unlinked_tickets_multiple" => ":user_name heeft de koppeling met tickets :extra_rel* verwijderd",
    "ticket_macro_automatic_multiple"   => "De macro's :macros zijn automatisch uitgevoerd op ticket #:rel.",
    "timeline_ticket_macro_automatic_multiple" => ":user_name heeft macro's :macros uitgevoerd",
    "ticket_customfield_updated_individual" => "Aangepast veld ':field_name' bijgewerkt voor ticket #:rel.",
    "timeline_ticket_customfield_updated_individual" => ":user_name heeft aangepast veld ':field_name' bijgewerkt",
    "timeline_ticket_opened_on_behalf"  => ":user_name heeft een ticket geopend namens :new_value",
    "timeline_ticket_message_deleted"   => ":user_name heeft bericht (:message_id) van :message_user_name verwijderd",
    "timeline_ticket_user_updated"      => ":user_name heeft de gebruiker gewijzigd van :old_value naar :new_value",
    "timeline_ticket_subject_updated"   => ":user_name heeft het onderwerp gewijzigd van <del>:old_value</del> naar :new_value",
    "timeline_ticket_department_updated" => ":user_name heeft de afdeling gewijzigd van :old_value naar :new_value",
    "timeline_ticket_status_updated"    => ":user_name heeft de status gewijzigd van :old_value naar :new_value",
    "timeline_ticket_priority_updated"  => ":user_name heeft de prioriteit gewijzigd van :old_value naar :new_value",
    "timeline_ticket_slaplan_updated"   => ":user_name heeft het SLA-plan gewijzigd van :old_value naar :new_value",
    "timeline_ticket_slaplan_set"       => ":user_name heeft het SLA-plan ingesteld op :new_value.",
    "timeline_ticket_slaplan_removed"   => ":user_name heeft het SLA-plan verwijderd (was :old_value).",
    "timeline_ticket_converted_user"    => ":user_name heeft een intern ticket omgezet naar een gebruikersticket",
    "timeline_ticket_converted_internal" => ":user_name heeft een gebruikersticket omgezet naar een intern ticket",
    "timeline_ticket_assigned_self"     => ":user_name heeft zichzelf toegewezen",
    "timeline_ticket_locked"            => ":user_name heeft het ticket vergrendeld",
    "timeline_ticket_unlocked"          => ":user_name heeft het ticket ontgrendeld",
    "timeline_ticket_unmerged"          => ":user_name heeft de samenvoeging ongedaan gemaakt",
    "timeline_ticket_user_blocked"      => ":user_name heeft e-mailadres :new_value geblokkeerd",
    "timeline_ticket_closed"            => ":user_name heeft het ticket gesloten",
    "timeline_ticket_inactive_closed"   => ":user_name heeft het ticket gesloten wegens inactiviteit",
    "timeline_ticket_awaiting_response" => ":user_name heeft een e-mail 'Wachten op reactie' naar de gebruiker verzonden",
    "timeline_ticket_split_from"        => ":user_name heeft berichten gesplitst naar nieuw ticket #:new_value",
    "timeline_ticket_split_to"          => ":user_name heeft berichten gesplitst vanuit ticket #:old_value",
    "timeline_ticket_attachment_deleted" => ":user_name heeft bijlage (:attachment_id) :attachment_name verwijderd uit <a href='#:message_id'>bericht</a>",
    "timeline_ticket_unassigned_self"   => ":user_name heeft de eigen toewijzing verwijderd",
    "timeline_ticket_macro_applied"     => ":user_name heeft macro ':new_value' uitgevoerd",
    "timeline_ticket_macro_automatic"   => ":user_name heeft macro ':new_value' uitgevoerd",
    "timeline_ticket_message_edited"    => ":user_name heeft een :extra_rel1 bewerkt",
    "timeline_ticket_brand_updated"     => ":user_name heeft het merk gewijzigd van :old_value naar :new_value",
    "timeline_ticket_watching"          => ":user_name volgt dit ticket nu",
    "timeline_ticket_unwatching"        => ":user_name volgt dit ticket niet langer",
    "timeline_ticket_department_email_updated" => ":user_name heeft het afdelings-e-mailadres gewijzigd van :old_value naar :new_value",
    "timeline_ticket_trashed"           => ":user_name heeft het ticket naar de prullenbak verplaatst",
    "timeline_ticket_restored"          => ":user_name heeft het ticket uit de prullenbak hersteld",
    "timeline_ticket_followup_set"      => ":user_name heeft een opvolgactie aangemaakt",
    "timeline_ticket_followup_updated"  => ":user_name heeft een opvolgactie bijgewerkt",
    "timeline_ticket_followup_deleted"  => ":user_name heeft een opvolgactie verwijderd",
    "timeline_ticket_reply_duetime_updated" => ":user_name heeft de reactietermijn gewijzigd naar :new_value",
    "timeline_ticket_resolve_duetime_updated" => ":user_name heeft de oplostermijn gewijzigd naar :new_value",
    "timeline_ticket_reply_duetime_unset" => ":user_name heeft de reactietermijn gewist",
    "timeline_ticket_resolve_duetime_unset" => ":user_name heeft de oplostermijn gewist",
    "timeline_ticket_duetime_paused"    => ":user_name heeft de termijnen gepauzeerd",
    "timeline_ticket_duetime_unpaused"  => ":user_name heeft de termijnen hervat",
    "timeline_ticket_feedback_rating"   => ":user_name heeft de feedbackbeoordeling ingesteld op :extra_rel1", // Rated as 'general.good / general.bad / general.neutral'
    "timeline_ticket_feedback_saved"    => ":user_name heeft :extra_rel1 opgeslagen", // Saved (lowercase ticket.feedback)
    "timeline_ticket_pinned_message"    => ":user_name heeft een <a href='#:message_id'>bericht</a> vastgezet",
    "timeline_ticket_unpinned_message"  => ":user_name heeft een <a href='#:message_id'>bericht</a> losgemaakt",
    "ticket_attachment_rejected"        => "Bijlage(n) :files geblokkeerd voor ticket #:rel vanwege een ongeldig bestandstype.",
    "timeline_ticket_attachment_rejected" => "Bijlage(n) :files geblokkeerd vanwege een ongeldig bestandstype",

    /*
     * 6.1.0
     */
    "system_update_started"             => "Started system update to version :rel.",

);

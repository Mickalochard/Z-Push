<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit153a56a781a72686b71399955d98204f
{
    public static $files = array (
        '158e247719544c05f5e89c414f630c24' => __DIR__ . '/../..' . '/version.php',
        '7e65a9fc8bb44d8c2fe16fa283aeaaee' => __DIR__ . '/../..' . '/lib/core/zpushdefs.php',
        'd2a63a53b4a43a2bd71de0cec5c1abfb' => __DIR__ . '/../..' . '/lib/utils/compat.php',
    );

    public static $classMap = array (
        'ASDevice' => __DIR__ . '/../..' . '/lib/core/asdevice.php',
        'Auth_SASL' => __DIR__ . '/../..' . '/backend/imap/Auth/SASL.php',
        'Auth_SASL_Anonymous' => __DIR__ . '/../..' . '/backend/imap/Auth/SASL/Anonymous.php',
        'Auth_SASL_Common' => __DIR__ . '/../..' . '/backend/imap/Auth/SASL/Common.php',
        'Auth_SASL_CramMD5' => __DIR__ . '/../..' . '/backend/imap/Auth/SASL/CramMD5.php',
        'Auth_SASL_DigestMD5' => __DIR__ . '/../..' . '/backend/imap/Auth/SASL/DigestMD5.php',
        'Auth_SASL_External' => __DIR__ . '/../..' . '/backend/imap/Auth/SASL/External.php',
        'Auth_SASL_Login' => __DIR__ . '/../..' . '/backend/imap/Auth/SASL/Login.php',
        'Auth_SASL_Plain' => __DIR__ . '/../..' . '/backend/imap/Auth/SASL/Plain.php',
        'Auth_SASL_SCRAM' => __DIR__ . '/../..' . '/backend/imap/Auth/SASL/SCRAM.php',
        'AuthenticationRequiredException' => __DIR__ . '/../..' . '/lib/exceptions/authenticationrequiredexception.php',
        'Backend' => __DIR__ . '/../..' . '/lib/default/backend.php',
        'BackendCalDAV' => __DIR__ . '/../..' . '/backend/caldav/caldav.php',
        'BackendCardDAV' => __DIR__ . '/../..' . '/backend/carddav/carddav.php',
        'BackendCombined' => __DIR__ . '/../..' . '/backend/combined/combined.php',
        'BackendCombinedConfig' => __DIR__ . '/../..' . '/backend/combined/config.php',
        'BackendDiff' => __DIR__ . '/../..' . '/lib/default/diffbackend/diffbackend.php',
        'BackendICS' => __DIR__ . '/../..' . '/backend/kopano/kopano.php',
        'BackendIMAP' => __DIR__ . '/../..' . '/backend/imap/imap.php',
        'BackendKopano' => __DIR__ . '/../..' . '/backend/kopano/kopano.php',
        'BackendLDAP' => __DIR__ . '/../..' . '/backend/ldap/ldap.php',
        'BackendMaildir' => __DIR__ . '/../..' . '/backend/maildir/maildir.php',
        'BackendSearchLDAP' => __DIR__ . '/../..' . '/backend/searchldap/searchldap.php',
        'BackendStickyNote' => __DIR__ . '/../..' . '/backend/stickynote/stickynote.php',
        'BackendVCardDir' => __DIR__ . '/../..' . '/backend/vcarddir/vcarddir.php',
        'BackendZarafa' => __DIR__ . '/../..' . '/backend/kopano/kopano.php',
        'BadRequestException' => __DIR__ . '/../..' . '/lib/exceptions/badrequestexception.php',
        'BaseException' => __DIR__ . '/../..' . '/backend/kopano/mapi/class.baseexception.php',
        'BaseRecurrence' => __DIR__ . '/../..' . '/backend/kopano/mapi/class.baserecurrence.php',
        'BodyPartPreference' => __DIR__ . '/../..' . '/lib/core/bodypartpreference.php',
        'BodyPreference' => __DIR__ . '/../..' . '/lib/core/bodypreference.php',
        'CalDAVClient' => __DIR__ . '/../..' . '/include/z_caldav.php',
        'CalendarInfo' => __DIR__ . '/../..' . '/include/z_caldav.php',
        'ChangesMemoryWrapper' => __DIR__ . '/../..' . '/lib/core/changesmemorywrapper.php',
        'ContentParameters' => __DIR__ . '/../..' . '/lib/core/contentparameters.php',
        'DeviceManager' => __DIR__ . '/../..' . '/lib/core/devicemanager.php',
        'DiffState' => __DIR__ . '/../..' . '/lib/default/diffbackend/diffstate.php',
        'ExportChangesCombined' => __DIR__ . '/../..' . '/backend/combined/exporter.php',
        'ExportChangesDiff' => __DIR__ . '/../..' . '/lib/default/diffbackend/exportchangesdiff.php',
        'ExportChangesICS' => __DIR__ . '/../..' . '/backend/kopano/exporter.php',
        'FatalException' => __DIR__ . '/../..' . '/lib/exceptions/fatalexception.php',
        'FatalMisconfigurationException' => __DIR__ . '/../..' . '/lib/exceptions/fatalmisconfigurationexception.php',
        'FatalNotImplementedException' => __DIR__ . '/../..' . '/lib/exceptions/fatalnotimplementedexception.php',
        'FileLog' => __DIR__ . '/../..' . '/lib/log/filelog.php',
        'Find' => __DIR__ . '/../..' . '/lib/request/find.php',
        'FileStateMachine' => __DIR__ . '/../..' . '/lib/default/filestatemachine.php',
        'FolderChange' => __DIR__ . '/../..' . '/lib/request/folderchange.php',
        'FolderSync' => __DIR__ . '/../..' . '/lib/request/foldersync.php',
        'FreeBusyPublish' => __DIR__ . '/../..' . '/backend/kopano/mapi/class.freebusypublish.php',
        'GetAttachment' => __DIR__ . '/../..' . '/lib/request/getattachment.php',
        'GetHierarchy' => __DIR__ . '/../..' . '/lib/request/gethierarchy.php',
        'GetItemEstimate' => __DIR__ . '/../..' . '/lib/request/getitemestimate.php',
        'HTTPReturnCodeException' => __DIR__ . '/../..' . '/lib/exceptions/httpreturncodeexception.php',
        'HierarchyCache' => __DIR__ . '/../..' . '/lib/core/hierarchycache.php',
        'IBackend' => __DIR__ . '/../..' . '/lib/interface/ibackend.php',
        'IChanges' => __DIR__ . '/../..' . '/lib/interface/ichanges.php',
        'IExportChanges' => __DIR__ . '/../..' . '/lib/interface/iexportchanges.php',
        'IImportChanges' => __DIR__ . '/../..' . '/lib/interface/iimportchanges.php',
        'IIpcProvider' => __DIR__ . '/../..' . '/lib/interface/iipcprovider.php',
        'ISearchProvider' => __DIR__ . '/../..' . '/lib/interface/isearchprovider.php',
        'IStateMachine' => __DIR__ . '/../..' . '/lib/interface/istatemachine.php',
        'ImportChangesCombined' => __DIR__ . '/../..' . '/backend/combined/importer.php',
        'ImportChangesDiff' => __DIR__ . '/../..' . '/lib/default/diffbackend/importchangesdiff.php',
        'ImportChangesICS' => __DIR__ . '/../..' . '/backend/kopano/importer.php',
        'ImportChangesStream' => __DIR__ . '/../..' . '/lib/core/streamimporter.php',
        'ImportHierarchyChangesCombinedWrap' => __DIR__ . '/../..' . '/backend/combined/importer.php',
        'InterProcessData' => __DIR__ . '/../..' . '/lib/core/interprocessdata.php',
        'IpcMemcachedProvider' => __DIR__ . '/../..' . '/backend/ipcmemcached/ipcmemcachedprovider.php',
        'IpcSharedMemoryProvider' => __DIR__ . '/../..' . '/backend/ipcsharedmemory/ipcsharedmemoryprovider.php',
        'IpcWincacheProvider' => __DIR__ . '/../..' . '/backend/ipcwincache/ipcwincacheprovider.php',
        'ItemOperations' => __DIR__ . '/../..' . '/lib/request/itemoperations.php',
        'KoeSignature' => __DIR__ . '/../..' . '/lib/core/koesignatures.php',
        'KoeSignatures' => __DIR__ . '/../..' . '/lib/core/koesignatures.php',
        'KopanoChangesWrapper' => __DIR__ . '/../..' . '/backend/kopano/kopanochangeswrapper.php',
        'Log' => __DIR__ . '/../..' . '/lib/log/log.php',
        'LoopDetection' => __DIR__ . '/../..' . '/lib/core/loopdetection.php',
        'MAPIException' => __DIR__ . '/../..' . '/backend/kopano/mapi/class.mapiexception.php',
        'MAPIMapping' => __DIR__ . '/../..' . '/backend/kopano/mapimapping.php',
        'MAPIProvider' => __DIR__ . '/../..' . '/backend/kopano/mapiprovider.php',
        'MAPIStreamWrapper' => __DIR__ . '/../..' . '/backend/kopano/mapistreamwrapper.php',
        'MAPIUtils' => __DIR__ . '/../..' . '/backend/kopano/mapiutils.php',
        'Mail' => __DIR__ . '/../..' . '/backend/imap/Mail.php',
        'Mail_RFC822' => __DIR__ . '/../..' . '/include/z_RFC822.php',
        'Mail_mail' => __DIR__ . '/../..' . '/backend/imap/Mail/mail.php',
        'Mail_mimeDecode' => __DIR__ . '/../..' . '/include/mimeDecode.php',
        'Mail_mimePart' => __DIR__ . '/../..' . '/backend/imap/mimePart.php',
        'Mail_sendmail' => __DIR__ . '/../..' . '/backend/imap/Mail/sendmail.php',
        'Mail_smtp' => __DIR__ . '/../..' . '/backend/imap/Mail/smtp.php',
        'MeetingResponse' => __DIR__ . '/../..' . '/lib/request/meetingresponse.php',
        'Meetingrequest' => __DIR__ . '/../..' . '/backend/kopano/mapi/class.meetingrequest.php',
        'MoveItems' => __DIR__ . '/../..' . '/lib/request/moveitems.php',
        'Net_SMTP' => __DIR__ . '/../..' . '/backend/imap/Net/SMTP.php',
        'Net_Socket' => __DIR__ . '/../..' . '/backend/imap/Net/Socket.php',
        'NoHierarchyCacheAvailableException' => __DIR__ . '/../..' . '/lib/exceptions/nohierarchycacheavailableexception.php',
        'NoPostRequestException' => __DIR__ . '/../..' . '/lib/exceptions/nopostrequestexception.php',
        'NotImplementedException' => __DIR__ . '/../..' . '/lib/exceptions/notimplementedexception.php',
        'Notify' => __DIR__ . '/../..' . '/lib/request/notify.php',
        'PHPWrapper' => __DIR__ . '/../..' . '/backend/kopano/mapiphpwrapper.php',
        'Ping' => __DIR__ . '/../..' . '/lib/request/ping.php',
        'PingTracking' => __DIR__ . '/../..' . '/lib/core/pingtracking.php',
        'Provisioning' => __DIR__ . '/../..' . '/lib/request/provisioning.php',
        'ProvisioningRequiredException' => __DIR__ . '/../..' . '/lib/exceptions/provisioningrequiredexception.php',
        'Recurrence' => __DIR__ . '/../..' . '/backend/kopano/mapi/class.recurrence.php',
        'ReplaceNullcharFilter' => __DIR__ . '/../..' . '/lib/wbxml/replacenullcharfilter.php',
        'ReplyBackImExporter' => __DIR__ . '/../..' . '/backend/kopano/replybackimexporter.php',
        'ReplyBackState' => __DIR__ . '/../..' . '/backend/kopano/replybackstate.php',
        'Request' => __DIR__ . '/../..' . '/lib/request/request.php',
        'RequestProcessor' => __DIR__ . '/../..' . '/lib/request/requestprocessor.php',
        'ResolveRecipients' => __DIR__ . '/../..' . '/lib/request/resolverecipients.php',
        'ResponseTrait' => __DIR__ . '/../..' . '/lib/syncobjects/responsetrait.php',
        'Search' => __DIR__ . '/../..' . '/lib/request/search.php',
        'SearchProvider' => __DIR__ . '/../..' . '/lib/default/searchprovider.php',
        'SendMail' => __DIR__ . '/../..' . '/lib/request/sendmail.php',
        'ServiceUnavailableException' => __DIR__ . '/../..' . '/lib/exceptions/serviceunavailableexception.php',
        'Settings' => __DIR__ . '/../..' . '/lib/request/settings.php',
        'SimpleMutex' => __DIR__ . '/../..' . '/lib/default/simplemutex.php',
        'SqlStateMachine' => __DIR__ . '/../..' . '/backend/sqlstatemachine/sqlstatemachine.php',
        'StateInvalidException' => __DIR__ . '/../..' . '/lib/exceptions/stateinvalidexception.php',
        'StateManager' => __DIR__ . '/../..' . '/lib/core/statemanager.php',
        'StateNotFoundException' => __DIR__ . '/../..' . '/lib/exceptions/statenotfoundexception.php',
        'StateNotYetAvailableException' => __DIR__ . '/../..' . '/lib/exceptions/statenotyetavailableexception.php',
        'StateObject' => __DIR__ . '/../..' . '/lib/core/stateobject.php',
        'StatusException' => __DIR__ . '/../..' . '/lib/exceptions/statusexception.php',
        'Streamer' => __DIR__ . '/../..' . '/lib/core/streamer.php',
        'StringStreamWrapper' => __DIR__ . '/../..' . '/lib/utils/stringstreamwrapper.php',
        'Sync' => __DIR__ . '/../..' . '/lib/request/sync.php',
        'SyncAccount' => __DIR__ . '/../..' . '/lib/syncobjects/syncaccount.php',
        'SyncAppointment' => __DIR__ . '/../..' . '/lib/syncobjects/syncappointment.php',
        'SyncAppointmentException' => __DIR__ . '/../..' . '/lib/syncobjects/syncappointmentexception.php',
        'SyncAppointmentResponse' => __DIR__ . '/../..' . '/lib/syncobjects/syncappointment.php',
        'SyncAttachment' => __DIR__ . '/../..' . '/lib/syncobjects/syncattachment.php',
        'SyncAttendee' => __DIR__ . '/../..' . '/lib/syncobjects/syncattendee.php',
        'SyncBaseAttachment' => __DIR__ . '/../..' . '/lib/syncobjects/syncbaseattachment.php',
        'SyncBaseAttachmentAdd' => __DIR__ . '/../..' . '/lib/syncobjects/syncbaseattachment.php',
        'SyncBaseAttachmentDelete' => __DIR__ . '/../..' . '/lib/syncobjects/syncbaseattachment.php',
        'SyncBaseBody' => __DIR__ . '/../..' . '/lib/syncobjects/syncbasebody.php',
        'SyncBaseBodyPart' => __DIR__ . '/../..' . '/lib/syncobjects/syncbasebodypart.php',
        'SyncCollections' => __DIR__ . '/../..' . '/lib/core/synccollections.php',
        'SyncContact' => __DIR__ . '/../..' . '/lib/syncobjects/synccontact.php',
        'SyncContactResponse' => __DIR__ . '/../..' . '/lib/syncobjects/synccontact.php',
        'SyncDeviceInformation' => __DIR__ . '/../..' . '/lib/syncobjects/syncdeviceinformation.php',
        'SyncDevicePassword' => __DIR__ . '/../..' . '/lib/syncobjects/syncdevicepassword.php',
        'SyncEmailAddresses' => __DIR__ . '/../..' . '/lib/syncobjects/syncemailaddresses.php',
        'SyncFindProperties' => __DIR__ . '/../..' . '/lib/syncobjects/syncfindproperties.php',
        'SyncFolder' => __DIR__ . '/../..' . '/lib/syncobjects/syncfolder.php',
        'SyncItemOperationsAttachment' => __DIR__ . '/../..' . '/lib/syncobjects/syncitemoperationsattachment.php',
        'SyncMail' => __DIR__ . '/../..' . '/lib/syncobjects/syncmail.php',
        'SyncMailFlags' => __DIR__ . '/../..' . '/lib/syncobjects/syncmailflags.php',
        'SyncMailResponse' => __DIR__ . '/../..' . '/lib/syncobjects/syncmail.php',
        'SyncMeetingRequest' => __DIR__ . '/../..' . '/lib/syncobjects/syncmeetingrequest.php',
        'SyncMeetingRequestRecurrence' => __DIR__ . '/../..' . '/lib/syncobjects/syncmeetingrequestrecurrence.php',
        'SyncNote' => __DIR__ . '/../..' . '/lib/syncobjects/syncnote.php',
        'SyncNoteResponse' => __DIR__ . '/../..' . '/lib/syncobjects/syncnote.php',
        'SyncOOF' => __DIR__ . '/../..' . '/lib/syncobjects/syncoof.php',
        'SyncOOFMessage' => __DIR__ . '/../..' . '/lib/syncobjects/syncoofmessage.php',
        'SyncObject' => __DIR__ . '/../..' . '/lib/syncobjects/syncobject.php',
        'SyncObjectBrokenException' => __DIR__ . '/../..' . '/lib/exceptions/syncobjectbrokenexception.php',
        'SyncParameters' => __DIR__ . '/../..' . '/lib/core/syncparameters.php',
        'SyncProvisioning' => __DIR__ . '/../..' . '/lib/syncobjects/syncprovisioning.php',
        'SyncRecurrence' => __DIR__ . '/../..' . '/lib/syncobjects/syncrecurrence.php',
        'SyncResolveRecipient' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipient.php',
        'SyncResolveRecipients' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipients.php',
        'SyncResolveRecipientsAvailability' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipientsavailability.php',
        'SyncResolveRecipientsCertificates' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipientscertificates.php',
        'SyncResolveRecipientsOptions' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipientsoptions.php',
        'SyncResolveRecipientsPicture' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipientspicture.php',
        'SyncResolveRecipientsResponse' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipientsresponse.php',
        'SyncRightsManagementLicense' => __DIR__ . '/../..' . '/lib/syncobjects/syncrightsmanagementlicense.php',
        'SyncRightsManagementTemplate' => __DIR__ . '/../..' . '/lib/syncobjects/syncrightsmanagementtemplate.php',
        'SyncRightsManagementTemplates' => __DIR__ . '/../..' . '/lib/syncobjects/syncrightsmanagementtemplates.php',
        'SyncSendMail' => __DIR__ . '/../..' . '/lib/syncobjects/syncsendmail.php',
        'SyncSendMailSource' => __DIR__ . '/../..' . '/lib/syncobjects/syncsendmailsource.php',
        'SyncTask' => __DIR__ . '/../..' . '/lib/syncobjects/synctask.php',
        'SyncTaskRecurrence' => __DIR__ . '/../..' . '/lib/syncobjects/synctaskrecurrence.php',
        'SyncTaskResponse' => __DIR__ . '/../..' . '/lib/syncobjects/synctask.php',
        'SyncUserInformation' => __DIR__ . '/../..' . '/lib/syncobjects/syncuserinformation.php',
        'SyncValidateCert' => __DIR__ . '/../..' . '/lib/syncobjects/syncvalidatecert.php',
        'Syslog' => __DIR__ . '/../..' . '/lib/log/syslog.php',
        'TaskRecurrence' => __DIR__ . '/../..' . '/backend/kopano/mapi/class.taskrecurrence.php',
        'TaskRequest' => __DIR__ . '/../..' . '/backend/kopano/mapi/class.taskrequest.php',
        'TimezoneUtil' => __DIR__ . '/../..' . '/lib/utils/timezoneutil.php',
        'TopCollector' => __DIR__ . '/../..' . '/lib/core/topcollector.php',
        'UnavailableException' => __DIR__ . '/../..' . '/lib/exceptions/unavailableexception.php',
        'UserStoreInfo' => __DIR__ . '/../..' . '/lib/core/userstoreinfo.php',
        'Utils' => __DIR__ . '/../..' . '/lib/utils/utils.php',
        'ValidateCert' => __DIR__ . '/../..' . '/lib/request/validatecert.php',
        'WBXMLDecoder' => __DIR__ . '/../..' . '/lib/wbxml/wbxmldecoder.php',
        'WBXMLDefs' => __DIR__ . '/../..' . '/lib/wbxml/wbxmldefs.php',
        'WBXMLEncoder' => __DIR__ . '/../..' . '/lib/wbxml/wbxmlencoder.php',
        'WBXMLException' => __DIR__ . '/../..' . '/lib/exceptions/wbxmlexception.php',
        'Webservice' => __DIR__ . '/../..' . '/lib/webservice/webservice.php',
        'WebserviceDevice' => __DIR__ . '/../..' . '/lib/webservice/webservicedevice.php',
        'WebserviceInfo' => __DIR__ . '/../..' . '/lib/webservice/webserviceinfo.php',
        'WebserviceUsers' => __DIR__ . '/../..' . '/lib/webservice/webserviceusers.php',
        'ZLog' => __DIR__ . '/../..' . '/lib/core/zlog.php',
        'ZPush' => __DIR__ . '/../..' . '/lib/core/zpush.php',
        'ZPushAdmin' => __DIR__ . '/../..' . '/lib/utils/zpushadmin.php',
        'ZPushAutodiscover' => __DIR__ . '/../..' . '/autodiscover/autodiscover.php',
        'ZPushException' => __DIR__ . '/../..' . '/lib/exceptions/zpushexception.php',
        'carddav_backend' => __DIR__ . '/../..' . '/include/z_carddav.php',
        'iCalComponent' => __DIR__ . '/../..' . '/include/iCalendar.php',
        'iCalProp' => __DIR__ . '/../..' . '/include/iCalendar.php',
        'rtf' => __DIR__ . '/../..' . '/include/rtfclass.php',
        'rtfState' => __DIR__ . '/../..' . '/include/rtfclass.php',
        'z_RTF' => __DIR__ . '/../..' . '/include/z_RTF.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit153a56a781a72686b71399955d98204f::$classMap;

        }, null, ClassLoader::class);
    }
}

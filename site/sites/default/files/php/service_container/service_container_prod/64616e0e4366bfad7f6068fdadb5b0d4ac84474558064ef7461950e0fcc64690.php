<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * service_container_prod
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class service_container_prod extends \Drupal\Core\DependencyInjection\Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'accept_header_matcher' => 'getAcceptHeaderMatcherService',
            'access_arguments_resolver' => 'getAccessArgumentsResolverService',
            'access_check.contact_personal' => 'getAccessCheck_ContactPersonalService',
            'access_check.cron' => 'getAccessCheck_CronService',
            'access_check.csrf' => 'getAccessCheck_CsrfService',
            'access_check.custom' => 'getAccessCheck_CustomService',
            'access_check.default' => 'getAccessCheck_DefaultService',
            'access_check.entity' => 'getAccessCheck_EntityService',
            'access_check.entity_create' => 'getAccessCheck_EntityCreateService',
            'access_check.field_ui.form_mode' => 'getAccessCheck_FieldUi_FormModeService',
            'access_check.field_ui.view_mode' => 'getAccessCheck_FieldUi_ViewModeService',
            'access_check.node.add' => 'getAccessCheck_Node_AddService',
            'access_check.node.revision' => 'getAccessCheck_Node_RevisionService',
            'access_check.permission' => 'getAccessCheck_PermissionService',
            'access_check.quickedit.entity' => 'getAccessCheck_Quickedit_EntityService',
            'access_check.quickedit.entity_field' => 'getAccessCheck_Quickedit_EntityFieldService',
            'access_check.shortcut.shortcut_set_switch' => 'getAccessCheck_Shortcut_ShortcutSetSwitchService',
            'access_check.theme' => 'getAccessCheck_ThemeService',
            'access_check.user.login_status' => 'getAccessCheck_User_LoginStatusService',
            'access_check.user.register' => 'getAccessCheck_User_RegisterService',
            'access_check.user.role' => 'getAccessCheck_User_RoleService',
            'access_manager' => 'getAccessManagerService',
            'access_route_subscriber' => 'getAccessRouteSubscriberService',
            'access_subscriber' => 'getAccessSubscriberService',
            'ajax.subscriber' => 'getAjax_SubscriberService',
            'ajax_response_renderer' => 'getAjaxResponseRendererService',
            'ajax_response_subscriber' => 'getAjaxResponseSubscriberService',
            'asset.css.collection_grouper' => 'getAsset_Css_CollectionGrouperService',
            'asset.css.collection_optimizer' => 'getAsset_Css_CollectionOptimizerService',
            'asset.css.collection_renderer' => 'getAsset_Css_CollectionRendererService',
            'asset.css.dumper' => 'getAsset_Css_DumperService',
            'asset.css.optimizer' => 'getAsset_Css_OptimizerService',
            'asset.js.collection_grouper' => 'getAsset_Js_CollectionGrouperService',
            'asset.js.collection_optimizer' => 'getAsset_Js_CollectionOptimizerService',
            'asset.js.collection_renderer' => 'getAsset_Js_CollectionRendererService',
            'asset.js.dumper' => 'getAsset_Js_DumperService',
            'asset.js.optimizer' => 'getAsset_Js_OptimizerService',
            'authentication' => 'getAuthenticationService',
            'authentication.cookie' => 'getAuthentication_CookieService',
            'authentication_subscriber' => 'getAuthenticationSubscriberService',
            'batch.storage' => 'getBatch_StorageService',
            'breadcrumb' => 'getBreadcrumbService',
            'cache.backend.apcu' => 'getCache_Backend_ApcuService',
            'cache.backend.database' => 'getCache_Backend_DatabaseService',
            'cache.backend.memory' => 'getCache_Backend_MemoryService',
            'cache.backend.null' => 'getCache_Backend_NullService',
            'cache.backend.php' => 'getCache_Backend_PhpService',
            'cache.bootstrap' => 'getCache_BootstrapService',
            'cache.data' => 'getCache_DataService',
            'cache.default' => 'getCache_DefaultService',
            'cache.discovery' => 'getCache_DiscoveryService',
            'cache.entity' => 'getCache_EntityService',
            'cache.filter' => 'getCache_FilterService',
            'cache.render' => 'getCache_RenderService',
            'cache.toolbar' => 'getCache_ToolbarService',
            'cache_context.language' => 'getCacheContext_LanguageService',
            'cache_context.theme' => 'getCacheContext_ThemeService',
            'cache_context.url' => 'getCacheContext_UrlService',
            'cache_context.user' => 'getCacheContext_UserService',
            'cache_context.user.roles' => 'getCacheContext_User_RolesService',
            'cache_contexts' => 'getCacheContextsService',
            'cache_factory' => 'getCacheFactoryService',
            'class_loader' => 'getClassLoaderService',
            'class_resolver' => 'getClassResolverService',
            'comment.breadcrumb' => 'getComment_BreadcrumbService',
            'comment.manager' => 'getComment_ManagerService',
            'comment.route_enhancer' => 'getComment_RouteEnhancerService',
            'comment.statistics' => 'getComment_StatisticsService',
            'config.factory' => 'getConfig_FactoryService',
            'config.installer' => 'getConfig_InstallerService',
            'config.manager' => 'getConfig_ManagerService',
            'config.storage.active' => 'getConfig_Storage_ActiveService',
            'config.storage.file' => 'getConfig_Storage_FileService',
            'config.storage.installer' => 'getConfig_Storage_InstallerService',
            'config.storage.schema' => 'getConfig_Storage_SchemaService',
            'config.storage.snapshot' => 'getConfig_Storage_SnapshotService',
            'config.storage.staging' => 'getConfig_Storage_StagingService',
            'config.typed' => 'getConfig_TypedService',
            'config_import_subscriber' => 'getConfigImportSubscriberService',
            'config_snapshot_subscriber' => 'getConfigSnapshotSubscriberService',
            'container.namespaces' => 'getContainer_NamespacesService',
            'content_negotiation' => 'getContentNegotiationService',
            'content_type_header_matcher' => 'getContentTypeHeaderMatcherService',
            'controller.ajax' => 'getController_AjaxService',
            'controller.dialog' => 'getController_DialogService',
            'controller.entityform' => 'getController_EntityformService',
            'controller.page' => 'getController_PageService',
            'controller_resolver' => 'getControllerResolverService',
            'country_manager' => 'getCountryManagerService',
            'cron' => 'getCronService',
            'csrf_token' => 'getCsrfTokenService',
            'current_user' => 'getCurrentUserService',
            'database' => 'getDatabaseService',
            'database.slave' => 'getDatabase_SlaveService',
            'date' => 'getDateService',
            'element_info' => 'getElementInfoService',
            'entity.form_builder' => 'getEntity_FormBuilderService',
            'entity.manager' => 'getEntity_ManagerService',
            'entity.query' => 'getEntity_QueryService',
            'entity.query.config' => 'getEntity_Query_ConfigService',
            'entity.query.keyvalue' => 'getEntity_Query_KeyvalueService',
            'entity.query.sql' => 'getEntity_Query_SqlService',
            'entity_reference.autocomplete' => 'getEntityReference_AutocompleteService',
            'event_dispatcher' => 'getEventDispatcherService',
            'exception_controller' => 'getExceptionControllerService',
            'exception_listener' => 'getExceptionListenerService',
            'feed.bridge.reader' => 'getFeed_Bridge_ReaderService',
            'feed.bridge.writer' => 'getFeed_Bridge_WriterService',
            'feed.reader.atomentry' => 'getFeed_Reader_AtomentryService',
            'feed.reader.atomfeed' => 'getFeed_Reader_AtomfeedService',
            'feed.reader.contententry' => 'getFeed_Reader_ContententryService',
            'feed.reader.dublincoreentry' => 'getFeed_Reader_DublincoreentryService',
            'feed.reader.dublincorefeed' => 'getFeed_Reader_DublincorefeedService',
            'feed.reader.podcastentry' => 'getFeed_Reader_PodcastentryService',
            'feed.reader.podcastfeed' => 'getFeed_Reader_PodcastfeedService',
            'feed.reader.slashentry' => 'getFeed_Reader_SlashentryService',
            'feed.reader.threadentry' => 'getFeed_Reader_ThreadentryService',
            'feed.reader.wellformedwebentry' => 'getFeed_Reader_WellformedwebentryService',
            'feed.writer.atomrendererfeed' => 'getFeed_Writer_AtomrendererfeedService',
            'feed.writer.contentrendererentry' => 'getFeed_Writer_ContentrendererentryService',
            'feed.writer.dublincorerendererentry' => 'getFeed_Writer_DublincorerendererentryService',
            'feed.writer.dublincorerendererfeed' => 'getFeed_Writer_DublincorerendererfeedService',
            'feed.writer.itunesentry' => 'getFeed_Writer_ItunesentryService',
            'feed.writer.itunesfeed' => 'getFeed_Writer_ItunesfeedService',
            'feed.writer.itunesrendererentry' => 'getFeed_Writer_ItunesrendererentryService',
            'feed.writer.itunesrendererfeed' => 'getFeed_Writer_ItunesrendererfeedService',
            'feed.writer.slashrendererentry' => 'getFeed_Writer_SlashrendererentryService',
            'feed.writer.threadingrendererentry' => 'getFeed_Writer_ThreadingrendererentryService',
            'feed.writer.wellformedwebrendererentry' => 'getFeed_Writer_WellformedwebrendererentryService',
            'field_ui.subscriber' => 'getFieldUi_SubscriberService',
            'file.usage' => 'getFile_UsageService',
            'finish_response_subscriber' => 'getFinishResponseSubscriberService',
            'flood' => 'getFloodService',
            'form_builder' => 'getFormBuilderService',
            'form_submitter' => 'getFormSubmitterService',
            'form_validator' => 'getFormValidatorService',
            'html_fragment_renderer' => 'getHtmlFragmentRendererService',
            'html_page_renderer' => 'getHtmlPageRendererService',
            'html_view_subscriber' => 'getHtmlViewSubscriberService',
            'http_client' => 'getHttpClientService',
            'http_kernel' => 'getHttpKernelService',
            'image.factory' => 'getImage_FactoryService',
            'image.toolkit.manager' => 'getImage_Toolkit_ManagerService',
            'info_parser' => 'getInfoParserService',
            'kernel' => 'getKernelService',
            'kernel_destruct_subscriber' => 'getKernelDestructSubscriberService',
            'keyvalue' => 'getKeyvalueService',
            'keyvalue.database' => 'getKeyvalue_DatabaseService',
            'keyvalue.expirable' => 'getKeyvalue_ExpirableService',
            'keyvalue.expirable.database' => 'getKeyvalue_Expirable_DatabaseService',
            'language.default' => 'getLanguage_DefaultService',
            'language_manager' => 'getLanguageManagerService',
            'legacy_request_subscriber' => 'getLegacyRequestSubscriberService',
            'library.discovery' => 'getLibrary_DiscoveryService',
            'link_generator' => 'getLinkGeneratorService',
            'lock' => 'getLockService',
            'logger.channel.default' => 'getLogger_Channel_DefaultService',
            'logger.dblog' => 'getLogger_DblogService',
            'logger.factory' => 'getLogger_FactoryService',
            'logger.log_message_parser' => 'getLogger_LogMessageParserService',
            'maintenance_mode_subscriber' => 'getMaintenanceModeSubscriberService',
            'menu_link.static' => 'getMenuLink_StaticService',
            'menu_link.tree' => 'getMenuLink_TreeService',
            'module_handler' => 'getModuleHandlerService',
            'node.admin_path.route_subscriber' => 'getNode_AdminPath_RouteSubscriberService',
            'node.grant_storage' => 'getNode_GrantStorageService',
            'paramconverter.configentity_admin' => 'getParamconverter_ConfigentityAdminService',
            'paramconverter.entity' => 'getParamconverter_EntityService',
            'paramconverter.views_ui' => 'getParamconverter_ViewsUiService',
            'paramconverter_manager' => 'getParamconverterManagerService',
            'paramconverter_subscriber' => 'getParamconverterSubscriberService',
            'password' => 'getPasswordService',
            'path.alias_manager' => 'getPath_AliasManagerService',
            'path.alias_storage' => 'getPath_AliasStorageService',
            'path.alias_whitelist' => 'getPath_AliasWhitelistService',
            'path_processor.files' => 'getPathProcessor_FilesService',
            'path_processor.image_styles' => 'getPathProcessor_ImageStylesService',
            'path_processor_alias' => 'getPathProcessorAliasService',
            'path_processor_decode' => 'getPathProcessorDecodeService',
            'path_processor_front' => 'getPathProcessorFrontService',
            'path_processor_manager' => 'getPathProcessorManagerService',
            'path_subscriber' => 'getPathSubscriberService',
            'plugin.cache_clearer' => 'getPlugin_CacheClearerService',
            'plugin.manager.action' => 'getPlugin_Manager_ActionService',
            'plugin.manager.archiver' => 'getPlugin_Manager_ArchiverService',
            'plugin.manager.block' => 'getPlugin_Manager_BlockService',
            'plugin.manager.ckeditor.plugin' => 'getPlugin_Manager_Ckeditor_PluginService',
            'plugin.manager.condition' => 'getPlugin_Manager_ConditionService',
            'plugin.manager.editor' => 'getPlugin_Manager_EditorService',
            'plugin.manager.entity_reference.selection' => 'getPlugin_Manager_EntityReference_SelectionService',
            'plugin.manager.field.field_type' => 'getPlugin_Manager_Field_FieldTypeService',
            'plugin.manager.field.formatter' => 'getPlugin_Manager_Field_FormatterService',
            'plugin.manager.field.widget' => 'getPlugin_Manager_Field_WidgetService',
            'plugin.manager.filter' => 'getPlugin_Manager_FilterService',
            'plugin.manager.image.effect' => 'getPlugin_Manager_Image_EffectService',
            'plugin.manager.mail' => 'getPlugin_Manager_MailService',
            'plugin.manager.menu.contextual_link' => 'getPlugin_Manager_Menu_ContextualLinkService',
            'plugin.manager.menu.local_action' => 'getPlugin_Manager_Menu_LocalActionService',
            'plugin.manager.menu.local_task' => 'getPlugin_Manager_Menu_LocalTaskService',
            'plugin.manager.quickedit.editor' => 'getPlugin_Manager_Quickedit_EditorService',
            'plugin.manager.search' => 'getPlugin_Manager_SearchService',
            'plugin.manager.tour.tip' => 'getPlugin_Manager_Tour_TipService',
            'plugin.manager.views.access' => 'getPlugin_Manager_Views_AccessService',
            'plugin.manager.views.area' => 'getPlugin_Manager_Views_AreaService',
            'plugin.manager.views.argument' => 'getPlugin_Manager_Views_ArgumentService',
            'plugin.manager.views.argument_default' => 'getPlugin_Manager_Views_ArgumentDefaultService',
            'plugin.manager.views.argument_validator' => 'getPlugin_Manager_Views_ArgumentValidatorService',
            'plugin.manager.views.cache' => 'getPlugin_Manager_Views_CacheService',
            'plugin.manager.views.display' => 'getPlugin_Manager_Views_DisplayService',
            'plugin.manager.views.display_extender' => 'getPlugin_Manager_Views_DisplayExtenderService',
            'plugin.manager.views.exposed_form' => 'getPlugin_Manager_Views_ExposedFormService',
            'plugin.manager.views.field' => 'getPlugin_Manager_Views_FieldService',
            'plugin.manager.views.filter' => 'getPlugin_Manager_Views_FilterService',
            'plugin.manager.views.join' => 'getPlugin_Manager_Views_JoinService',
            'plugin.manager.views.pager' => 'getPlugin_Manager_Views_PagerService',
            'plugin.manager.views.query' => 'getPlugin_Manager_Views_QueryService',
            'plugin.manager.views.relationship' => 'getPlugin_Manager_Views_RelationshipService',
            'plugin.manager.views.row' => 'getPlugin_Manager_Views_RowService',
            'plugin.manager.views.sort' => 'getPlugin_Manager_Views_SortService',
            'plugin.manager.views.style' => 'getPlugin_Manager_Views_StyleService',
            'plugin.manager.views.wizard' => 'getPlugin_Manager_Views_WizardService',
            'private_key' => 'getPrivateKeyService',
            'queue' => 'getQueueService',
            'queue.database' => 'getQueue_DatabaseService',
            'quickedit.editor.selector' => 'getQuickedit_Editor_SelectorService',
            'quickedit.metadata.generator' => 'getQuickedit_Metadata_GeneratorService',
            'redirect_response_subscriber' => 'getRedirectResponseSubscriberService',
            'request' => 'getRequestService',
            'request_close_subscriber' => 'getRequestCloseSubscriberService',
            'request_stack' => 'getRequestStackService',
            'reverse_proxy_subscriber' => 'getReverseProxySubscriberService',
            'route_content_controller_subscriber' => 'getRouteContentControllerSubscriberService',
            'route_content_form_controller_subscriber' => 'getRouteContentFormControllerSubscriberService',
            'route_enhancer.authentication' => 'getRouteEnhancer_AuthenticationService',
            'route_enhancer.entity' => 'getRouteEnhancer_EntityService',
            'route_enhancer.param_conversion' => 'getRouteEnhancer_ParamConversionService',
            'route_http_method_subscriber' => 'getRouteHttpMethodSubscriberService',
            'route_processor_csrf' => 'getRouteProcessorCsrfService',
            'route_processor_manager' => 'getRouteProcessorManagerService',
            'route_special_attributes_subscriber' => 'getRouteSpecialAttributesSubscriberService',
            'route_subscriber.entity' => 'getRouteSubscriber_EntityService',
            'route_subscriber.module' => 'getRouteSubscriber_ModuleService',
            'router' => 'getRouterService',
            'router.admin_context' => 'getRouter_AdminContextService',
            'router.builder' => 'getRouter_BuilderService',
            'router.dumper' => 'getRouter_DumperService',
            'router.dynamic' => 'getRouter_DynamicService',
            'router.matcher' => 'getRouter_MatcherService',
            'router.matcher.final_matcher' => 'getRouter_Matcher_FinalMatcherService',
            'router.path_roots_subscriber' => 'getRouter_PathRootsSubscriberService',
            'router.rebuild_subscriber' => 'getRouter_RebuildSubscriberService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router.route_preloader' => 'getRouter_RoutePreloaderService',
            'router.route_provider' => 'getRouter_RouteProviderService',
            'router_listener' => 'getRouterListenerService',
            'search.search_page_repository' => 'getSearch_SearchPageRepositoryService',
            'serialization.json' => 'getSerialization_JsonService',
            'serialization.phpserialize' => 'getSerialization_PhpserializeService',
            'serialization.yaml' => 'getSerialization_YamlService',
            'service_container' => 'getServiceContainerService',
            'session_manager' => 'getSessionManagerService',
            'session_manager.metadata_bag' => 'getSessionManager_MetadataBagService',
            'settings' => 'getSettingsService',
            'slave_database_ignore__subscriber' => 'getSlaveDatabaseIgnoreSubscriberService',
            'state' => 'getStateService',
            'string_translation' => 'getStringTranslationService',
            'string_translator.custom_strings' => 'getStringTranslator_CustomStringsService',
            'system.admin_path.route_subscriber' => 'getSystem_AdminPath_RouteSubscriberService',
            'system.automatic_cron' => 'getSystem_AutomaticCronService',
            'system.breadcrumb.default' => 'getSystem_Breadcrumb_DefaultService',
            'system.config_subscriber' => 'getSystem_ConfigSubscriberService',
            'system.manager' => 'getSystem_ManagerService',
            'taxonomy_term.breadcrumb' => 'getTaxonomyTerm_BreadcrumbService',
            'theme.negotiator' => 'getTheme_NegotiatorService',
            'theme.negotiator.admin_theme' => 'getTheme_Negotiator_AdminThemeService',
            'theme.negotiator.ajax_base_page' => 'getTheme_Negotiator_AjaxBasePageService',
            'theme.negotiator.block.admin_demo' => 'getTheme_Negotiator_Block_AdminDemoService',
            'theme.negotiator.default' => 'getTheme_Negotiator_DefaultService',
            'theme.negotiator.system.batch' => 'getTheme_Negotiator_System_BatchService',
            'theme.registry' => 'getTheme_RegistryService',
            'theme_handler' => 'getThemeHandlerService',
            'title_resolver' => 'getTitleResolverService',
            'token' => 'getTokenService',
            'transliteration' => 'getTransliterationService',
            'twig' => 'getTwigService',
            'twig.loader.filesystem' => 'getTwig_Loader_FilesystemService',
            'typed_data_manager' => 'getTypedDataManagerService',
            'url_generator' => 'getUrlGeneratorService',
            'user.auth' => 'getUser_AuthService',
            'user.autocomplete' => 'getUser_AutocompleteService',
            'user.data' => 'getUser_DataService',
            'user.permissions_hash' => 'getUser_PermissionsHashService',
            'user.tempstore' => 'getUser_TempstoreService',
            'user_maintenance_mode_subscriber' => 'getUserMaintenanceModeSubscriberService',
            'uuid' => 'getUuidService',
            'validation.constraint' => 'getValidation_ConstraintService',
            'view_subscriber' => 'getViewSubscriberService',
            'views.analyzer' => 'getViews_AnalyzerService',
            'views.executable' => 'getViews_ExecutableService',
            'views.exposed_form_cache' => 'getViews_ExposedFormCacheService',
            'views.route_access_check' => 'getViews_RouteAccessCheckService',
            'views.route_subscriber' => 'getViews_RouteSubscriberService',
            'views.views_data' => 'getViews_ViewsDataService',
            'views.views_data_helper' => 'getViews_ViewsDataHelperService',
        );
        $this->aliases = array(
            'config.storage' => 'config.storage.active',
            'twig.loader' => 'twig.loader.filesystem',
        );
    }

    /**
     * Gets the 'accept_header_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\AcceptHeaderMatcher A Drupal\Core\Routing\AcceptHeaderMatcher instance.
     */
    protected function getAcceptHeaderMatcherService()
    {
        return $this->services['accept_header_matcher'] = new \Drupal\Core\Routing\AcceptHeaderMatcher($this->get('content_negotiation'));
    }

    /**
     * Gets the 'access_arguments_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\AccessArgumentsResolver A Drupal\Core\Access\AccessArgumentsResolver instance.
     */
    protected function getAccessArgumentsResolverService()
    {
        return $this->services['access_arguments_resolver'] = new \Drupal\Core\Access\AccessArgumentsResolver();
    }

    /**
     * Gets the 'access_check.contact_personal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\contact\Access\ContactPageAccess A Drupal\contact\Access\ContactPageAccess instance.
     */
    protected function getAccessCheck_ContactPersonalService()
    {
        return $this->services['access_check.contact_personal'] = new \Drupal\contact\Access\ContactPageAccess($this->get('config.factory'), $this->get('user.data'));
    }

    /**
     * Gets the 'access_check.cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\Access\CronAccessCheck A Drupal\system\Access\CronAccessCheck instance.
     */
    protected function getAccessCheck_CronService()
    {
        return $this->services['access_check.cron'] = new \Drupal\system\Access\CronAccessCheck();
    }

    /**
     * Gets the 'access_check.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\CsrfAccessCheck A Drupal\Core\Access\CsrfAccessCheck instance.
     */
    protected function getAccessCheck_CsrfService()
    {
        return $this->services['access_check.csrf'] = new \Drupal\Core\Access\CsrfAccessCheck($this->get('csrf_token'));
    }

    /**
     * Gets the 'access_check.custom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\CustomAccessCheck A Drupal\Core\Access\CustomAccessCheck instance.
     */
    protected function getAccessCheck_CustomService()
    {
        return $this->services['access_check.custom'] = new \Drupal\Core\Access\CustomAccessCheck($this->get('controller_resolver'), $this->get('access_arguments_resolver'));
    }

    /**
     * Gets the 'access_check.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\DefaultAccessCheck A Drupal\Core\Access\DefaultAccessCheck instance.
     */
    protected function getAccessCheck_DefaultService()
    {
        return $this->services['access_check.default'] = new \Drupal\Core\Access\DefaultAccessCheck();
    }

    /**
     * Gets the 'access_check.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityAccessCheck A Drupal\Core\Entity\EntityAccessCheck instance.
     */
    protected function getAccessCheck_EntityService()
    {
        return $this->services['access_check.entity'] = new \Drupal\Core\Entity\EntityAccessCheck();
    }

    /**
     * Gets the 'access_check.entity_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityCreateAccessCheck A Drupal\Core\Entity\EntityCreateAccessCheck instance.
     */
    protected function getAccessCheck_EntityCreateService()
    {
        return $this->services['access_check.entity_create'] = new \Drupal\Core\Entity\EntityCreateAccessCheck($this->get('entity.manager'));
    }

    /**
     * Gets the 'access_check.field_ui.form_mode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\field_ui\Access\FormModeAccessCheck A Drupal\field_ui\Access\FormModeAccessCheck instance.
     */
    protected function getAccessCheck_FieldUi_FormModeService()
    {
        return $this->services['access_check.field_ui.form_mode'] = new \Drupal\field_ui\Access\FormModeAccessCheck($this->get('entity.manager'));
    }

    /**
     * Gets the 'access_check.field_ui.view_mode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\field_ui\Access\ViewModeAccessCheck A Drupal\field_ui\Access\ViewModeAccessCheck instance.
     */
    protected function getAccessCheck_FieldUi_ViewModeService()
    {
        return $this->services['access_check.field_ui.view_mode'] = new \Drupal\field_ui\Access\ViewModeAccessCheck($this->get('entity.manager'));
    }

    /**
     * Gets the 'access_check.node.add' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\node\Access\NodeAddAccessCheck A Drupal\node\Access\NodeAddAccessCheck instance.
     */
    protected function getAccessCheck_Node_AddService()
    {
        return $this->services['access_check.node.add'] = new \Drupal\node\Access\NodeAddAccessCheck($this->get('entity.manager'));
    }

    /**
     * Gets the 'access_check.node.revision' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\node\Access\NodeRevisionAccessCheck A Drupal\node\Access\NodeRevisionAccessCheck instance.
     */
    protected function getAccessCheck_Node_RevisionService()
    {
        return $this->services['access_check.node.revision'] = new \Drupal\node\Access\NodeRevisionAccessCheck($this->get('entity.manager'), $this->get('database'));
    }

    /**
     * Gets the 'access_check.permission' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\Access\PermissionAccessCheck A Drupal\user\Access\PermissionAccessCheck instance.
     */
    protected function getAccessCheck_PermissionService()
    {
        return $this->services['access_check.permission'] = new \Drupal\user\Access\PermissionAccessCheck();
    }

    /**
     * Gets the 'access_check.quickedit.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\quickedit\Access\EditEntityAccessCheck A Drupal\quickedit\Access\EditEntityAccessCheck instance.
     */
    protected function getAccessCheck_Quickedit_EntityService()
    {
        return $this->services['access_check.quickedit.entity'] = new \Drupal\quickedit\Access\EditEntityAccessCheck($this->get('entity.manager'));
    }

    /**
     * Gets the 'access_check.quickedit.entity_field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\quickedit\Access\EditEntityFieldAccessCheck A Drupal\quickedit\Access\EditEntityFieldAccessCheck instance.
     */
    protected function getAccessCheck_Quickedit_EntityFieldService()
    {
        return $this->services['access_check.quickedit.entity_field'] = new \Drupal\quickedit\Access\EditEntityFieldAccessCheck($this->get('entity.manager'));
    }

    /**
     * Gets the 'access_check.shortcut.shortcut_set_switch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\shortcut\Access\ShortcutSetSwitchAccessCheck A Drupal\shortcut\Access\ShortcutSetSwitchAccessCheck instance.
     */
    protected function getAccessCheck_Shortcut_ShortcutSetSwitchService()
    {
        return $this->services['access_check.shortcut.shortcut_set_switch'] = new \Drupal\shortcut\Access\ShortcutSetSwitchAccessCheck();
    }

    /**
     * Gets the 'access_check.theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Theme\ThemeAccessCheck A Drupal\Core\Theme\ThemeAccessCheck instance.
     */
    protected function getAccessCheck_ThemeService()
    {
        return $this->services['access_check.theme'] = new \Drupal\Core\Theme\ThemeAccessCheck();
    }

    /**
     * Gets the 'access_check.user.login_status' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\Access\LoginStatusCheck A Drupal\user\Access\LoginStatusCheck instance.
     */
    protected function getAccessCheck_User_LoginStatusService()
    {
        return $this->services['access_check.user.login_status'] = new \Drupal\user\Access\LoginStatusCheck();
    }

    /**
     * Gets the 'access_check.user.register' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\Access\RegisterAccessCheck A Drupal\user\Access\RegisterAccessCheck instance.
     */
    protected function getAccessCheck_User_RegisterService()
    {
        return $this->services['access_check.user.register'] = new \Drupal\user\Access\RegisterAccessCheck();
    }

    /**
     * Gets the 'access_check.user.role' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\Access\RoleAccessCheck A Drupal\user\Access\RoleAccessCheck instance.
     */
    protected function getAccessCheck_User_RoleService()
    {
        return $this->services['access_check.user.role'] = new \Drupal\user\Access\RoleAccessCheck();
    }

    /**
     * Gets the 'access_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\AccessManager A Drupal\Core\Access\AccessManager instance.
     */
    protected function getAccessManagerService()
    {
        $this->services['access_manager'] = $instance = new \Drupal\Core\Access\AccessManager($this->get('router.route_provider'), $this->get('url_generator'), $this->get('paramconverter_manager'), $this->get('access_arguments_resolver'));

        $instance->setContainer($this);
        if ($this->has('request')) {
            $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        $instance->addCheckService('access_check.default', 'access', array(0 => '_access'));
        $instance->addCheckService('access_check.entity', 'access', array(0 => '_entity_access'));
        $instance->addCheckService('access_check.entity_create', 'access', array(0 => '_entity_create_access'));
        $instance->addCheckService('access_check.theme', 'access', array(0 => '_access_theme'));
        $instance->addCheckService('access_check.custom', 'access', array(0 => '_custom_access'));
        $instance->addCheckService('access_check.csrf', 'access', array(0 => '_csrf_token'));
        $instance->addCheckService('access_check.contact_personal', 'access', array(0 => '_access_contact_personal_tab'));
        $instance->addCheckService('access_check.field_ui.view_mode', 'access', array(0 => '_field_ui_view_mode_access'));
        $instance->addCheckService('access_check.field_ui.form_mode', 'access', array(0 => '_field_ui_form_mode_access'));
        $instance->addCheckService('access_check.node.revision', 'access', array(0 => '_access_node_revision'));
        $instance->addCheckService('access_check.node.add', 'access', array(0 => '_node_add_access'));
        $instance->addCheckService('access_check.quickedit.entity_field', 'access', array(0 => '_access_quickedit_entity_field'));
        $instance->addCheckService('access_check.quickedit.entity', 'access', array(0 => '_access_quickedit_entity'));
        $instance->addCheckService('access_check.shortcut.shortcut_set_switch', 'access', array(0 => '_access_shortcut_set_switch'));
        $instance->addCheckService('access_check.cron', 'access', array(0 => '_access_system_cron'));
        $instance->addCheckService('access_check.permission', 'access', array(0 => '_permission'));
        $instance->addCheckService('access_check.user.register', 'access', array(0 => '_access_user_register'));
        $instance->addCheckService('access_check.user.role', 'access', array(0 => '_role'));
        $instance->addCheckService('access_check.user.login_status', 'access', array(0 => '_user_is_logged_in'));
        $instance->addCheckService('views.route_access_check', 'access', array());

        return $instance;
    }

    /**
     * Gets the 'access_route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\AccessRouteSubscriber A Drupal\Core\EventSubscriber\AccessRouteSubscriber instance.
     */
    protected function getAccessRouteSubscriberService()
    {
        return $this->services['access_route_subscriber'] = new \Drupal\Core\EventSubscriber\AccessRouteSubscriber($this->get('access_manager'));
    }

    /**
     * Gets the 'access_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\AccessSubscriber A Drupal\Core\EventSubscriber\AccessSubscriber instance.
     */
    protected function getAccessSubscriberService()
    {
        $a = $this->get('current_user');

        $this->services['access_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\AccessSubscriber($this->get('access_manager'), $a);

        if ($this->has('current_user')) {
            $instance->setCurrentUser($a);
        }

        return $instance;
    }

    /**
     * Gets the 'ajax.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Ajax\AjaxSubscriber A Drupal\Core\Ajax\AjaxSubscriber instance.
     */
    protected function getAjax_SubscriberService()
    {
        return $this->services['ajax.subscriber'] = new \Drupal\Core\Ajax\AjaxSubscriber();
    }

    /**
     * Gets the 'ajax_response_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Ajax\AjaxResponseRenderer A Drupal\Core\Ajax\AjaxResponseRenderer instance.
     */
    protected function getAjaxResponseRendererService()
    {
        return $this->services['ajax_response_renderer'] = new \Drupal\Core\Ajax\AjaxResponseRenderer();
    }

    /**
     * Gets the 'ajax_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\AjaxResponseSubscriber A Drupal\Core\EventSubscriber\AjaxResponseSubscriber instance.
     */
    protected function getAjaxResponseSubscriberService()
    {
        return $this->services['ajax_response_subscriber'] = new \Drupal\Core\EventSubscriber\AjaxResponseSubscriber();
    }

    /**
     * Gets the 'asset.css.collection_grouper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssCollectionGrouper A Drupal\Core\Asset\CssCollectionGrouper instance.
     */
    protected function getAsset_Css_CollectionGrouperService()
    {
        return $this->services['asset.css.collection_grouper'] = new \Drupal\Core\Asset\CssCollectionGrouper();
    }

    /**
     * Gets the 'asset.css.collection_optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssCollectionOptimizer A Drupal\Core\Asset\CssCollectionOptimizer instance.
     */
    protected function getAsset_Css_CollectionOptimizerService()
    {
        return $this->services['asset.css.collection_optimizer'] = new \Drupal\Core\Asset\CssCollectionOptimizer($this->get('asset.css.collection_grouper'), $this->get('asset.css.optimizer'), $this->get('asset.css.dumper'), $this->get('state'));
    }

    /**
     * Gets the 'asset.css.collection_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssCollectionRenderer A Drupal\Core\Asset\CssCollectionRenderer instance.
     */
    protected function getAsset_Css_CollectionRendererService()
    {
        return $this->services['asset.css.collection_renderer'] = new \Drupal\Core\Asset\CssCollectionRenderer($this->get('state'));
    }

    /**
     * Gets the 'asset.css.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\AssetDumper A Drupal\Core\Asset\AssetDumper instance.
     */
    protected function getAsset_Css_DumperService()
    {
        return $this->services['asset.css.dumper'] = new \Drupal\Core\Asset\AssetDumper();
    }

    /**
     * Gets the 'asset.css.optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssOptimizer A Drupal\Core\Asset\CssOptimizer instance.
     */
    protected function getAsset_Css_OptimizerService()
    {
        return $this->services['asset.css.optimizer'] = new \Drupal\Core\Asset\CssOptimizer();
    }

    /**
     * Gets the 'asset.js.collection_grouper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsCollectionGrouper A Drupal\Core\Asset\JsCollectionGrouper instance.
     */
    protected function getAsset_Js_CollectionGrouperService()
    {
        return $this->services['asset.js.collection_grouper'] = new \Drupal\Core\Asset\JsCollectionGrouper();
    }

    /**
     * Gets the 'asset.js.collection_optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsCollectionOptimizer A Drupal\Core\Asset\JsCollectionOptimizer instance.
     */
    protected function getAsset_Js_CollectionOptimizerService()
    {
        return $this->services['asset.js.collection_optimizer'] = new \Drupal\Core\Asset\JsCollectionOptimizer($this->get('asset.js.collection_grouper'), $this->get('asset.js.optimizer'), $this->get('asset.js.dumper'), $this->get('state'));
    }

    /**
     * Gets the 'asset.js.collection_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsCollectionRenderer A Drupal\Core\Asset\JsCollectionRenderer instance.
     */
    protected function getAsset_Js_CollectionRendererService()
    {
        return $this->services['asset.js.collection_renderer'] = new \Drupal\Core\Asset\JsCollectionRenderer($this->get('state'));
    }

    /**
     * Gets the 'asset.js.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\AssetDumper A Drupal\Core\Asset\AssetDumper instance.
     */
    protected function getAsset_Js_DumperService()
    {
        return $this->services['asset.js.dumper'] = new \Drupal\Core\Asset\AssetDumper();
    }

    /**
     * Gets the 'asset.js.optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsOptimizer A Drupal\Core\Asset\JsOptimizer instance.
     */
    protected function getAsset_Js_OptimizerService()
    {
        return $this->services['asset.js.optimizer'] = new \Drupal\Core\Asset\JsOptimizer();
    }

    /**
     * Gets the 'authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Authentication\AuthenticationManager A Drupal\Core\Authentication\AuthenticationManager instance.
     */
    protected function getAuthenticationService()
    {
        $this->services['authentication'] = $instance = new \Drupal\Core\Authentication\AuthenticationManager();

        $instance->addProvider('authentication.cookie', $this->get('authentication.cookie'), 0);

        return $instance;
    }

    /**
     * Gets the 'authentication.cookie' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Authentication\Provider\Cookie A Drupal\Core\Authentication\Provider\Cookie instance.
     */
    protected function getAuthentication_CookieService()
    {
        return $this->services['authentication.cookie'] = new \Drupal\Core\Authentication\Provider\Cookie($this->get('session_manager'));
    }

    /**
     * Gets the 'authentication_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\AuthenticationSubscriber A Drupal\Core\EventSubscriber\AuthenticationSubscriber instance.
     */
    protected function getAuthenticationSubscriberService()
    {
        return $this->services['authentication_subscriber'] = new \Drupal\Core\EventSubscriber\AuthenticationSubscriber($this->get('authentication'));
    }

    /**
     * Gets the 'batch.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Batch\BatchStorage A Drupal\Core\Batch\BatchStorage instance.
     */
    protected function getBatch_StorageService()
    {
        return $this->services['batch.storage'] = new \Drupal\Core\Batch\BatchStorage($this->get('database'));
    }

    /**
     * Gets the 'breadcrumb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Breadcrumb\BreadcrumbManager A Drupal\Core\Breadcrumb\BreadcrumbManager instance.
     */
    protected function getBreadcrumbService()
    {
        $this->services['breadcrumb'] = $instance = new \Drupal\Core\Breadcrumb\BreadcrumbManager($this->get('module_handler'));

        $instance->addBuilder($this->get('taxonomy_term.breadcrumb'), 1002);
        $instance->addBuilder($this->get('comment.breadcrumb'), 100);
        $instance->addBuilder($this->get('system.breadcrumb.default'), 0);

        return $instance;
    }

    /**
     * Gets the 'cache.backend.apcu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\ApcuBackendFactory A Drupal\Core\Cache\ApcuBackendFactory instance.
     */
    protected function getCache_Backend_ApcuService()
    {
        return $this->services['cache.backend.apcu'] = new \Drupal\Core\Cache\ApcuBackendFactory();
    }

    /**
     * Gets the 'cache.backend.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\DatabaseBackendFactory A Drupal\Core\Cache\DatabaseBackendFactory instance.
     */
    protected function getCache_Backend_DatabaseService()
    {
        return $this->services['cache.backend.database'] = new \Drupal\Core\Cache\DatabaseBackendFactory($this->get('database'));
    }

    /**
     * Gets the 'cache.backend.memory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\MemoryBackendFactory A Drupal\Core\Cache\MemoryBackendFactory instance.
     */
    protected function getCache_Backend_MemoryService()
    {
        return $this->services['cache.backend.memory'] = new \Drupal\Core\Cache\MemoryBackendFactory();
    }

    /**
     * Gets the 'cache.backend.null' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\NullBackendFactory A Drupal\Core\Cache\NullBackendFactory instance.
     */
    protected function getCache_Backend_NullService()
    {
        return $this->services['cache.backend.null'] = new \Drupal\Core\Cache\NullBackendFactory();
    }

    /**
     * Gets the 'cache.backend.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\PhpBackendFactory A Drupal\Core\Cache\PhpBackendFactory instance.
     */
    protected function getCache_Backend_PhpService()
    {
        return $this->services['cache.backend.php'] = new \Drupal\Core\Cache\PhpBackendFactory();
    }

    /**
     * Gets the 'cache.bootstrap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_BootstrapService()
    {
        return $this->services['cache.bootstrap'] = $this->get('cache_factory')->get('bootstrap');
    }

    /**
     * Gets the 'cache.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DataService()
    {
        return $this->services['cache.data'] = $this->get('cache_factory')->get('data');
    }

    /**
     * Gets the 'cache.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DefaultService()
    {
        return $this->services['cache.default'] = $this->get('cache_factory')->get('default');
    }

    /**
     * Gets the 'cache.discovery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DiscoveryService()
    {
        return $this->services['cache.discovery'] = $this->get('cache_factory')->get('discovery');
    }

    /**
     * Gets the 'cache.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_EntityService()
    {
        return $this->services['cache.entity'] = $this->get('cache_factory')->get('entity');
    }

    /**
     * Gets the 'cache.filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_FilterService()
    {
        return $this->services['cache.filter'] = $this->get('cache_factory')->get('filter');
    }

    /**
     * Gets the 'cache.render' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_RenderService()
    {
        return $this->services['cache.render'] = $this->get('cache_factory')->get('render');
    }

    /**
     * Gets the 'cache.toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_ToolbarService()
    {
        return $this->services['cache.toolbar'] = $this->get('cache_factory')->get('toolbar');
    }

    /**
     * Gets the 'cache_context.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\LanguageCacheContext A Drupal\Core\Cache\LanguageCacheContext instance.
     */
    protected function getCacheContext_LanguageService()
    {
        return $this->services['cache_context.language'] = new \Drupal\Core\Cache\LanguageCacheContext($this->get('language_manager'));
    }

    /**
     * Gets the 'cache_context.theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\ThemeCacheContext A Drupal\Core\Cache\ThemeCacheContext instance.
     */
    protected function getCacheContext_ThemeService()
    {
        return $this->services['cache_context.theme'] = new \Drupal\Core\Cache\ThemeCacheContext($this->get('request_stack'), $this->get('theme.negotiator'));
    }

    /**
     * Gets the 'cache_context.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\UrlCacheContext A Drupal\Core\Cache\UrlCacheContext instance.
     */
    protected function getCacheContext_UrlService()
    {
        return $this->services['cache_context.url'] = new \Drupal\Core\Cache\UrlCacheContext($this->get('request_stack'));
    }

    /**
     * Gets the 'cache_context.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\Cache\UserCacheContext A Drupal\user\Cache\UserCacheContext instance.
     */
    protected function getCacheContext_UserService()
    {
        return $this->services['cache_context.user'] = new \Drupal\user\Cache\UserCacheContext($this->get('current_user'));
    }

    /**
     * Gets the 'cache_context.user.roles' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\Cache\UserRolesCacheContext A Drupal\user\Cache\UserRolesCacheContext instance.
     */
    protected function getCacheContext_User_RolesService()
    {
        return $this->services['cache_context.user.roles'] = new \Drupal\user\Cache\UserRolesCacheContext($this->get('current_user'));
    }

    /**
     * Gets the 'cache_contexts' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheContexts A Drupal\Core\Cache\CacheContexts instance.
     */
    protected function getCacheContextsService()
    {
        return $this->services['cache_contexts'] = new \Drupal\Core\Cache\CacheContexts($this, array(0 => 'cache_context.url', 1 => 'cache_context.language', 2 => 'cache_context.theme', 3 => 'cache_context.user', 4 => 'cache_context.user.roles'));
    }

    /**
     * Gets the 'cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheFactory A Drupal\Core\Cache\CacheFactory instance.
     */
    protected function getCacheFactoryService()
    {
        $this->services['cache_factory'] = $instance = new \Drupal\Core\Cache\CacheFactory($this->get('settings'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'class_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getClassLoaderService()
    {
        throw new RuntimeException('You have requested a synthetic service ("class_loader"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'class_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\DependencyInjection\ClassResolver A Drupal\Core\DependencyInjection\ClassResolver instance.
     */
    protected function getClassResolverService()
    {
        $this->services['class_resolver'] = $instance = new \Drupal\Core\DependencyInjection\ClassResolver();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'comment.breadcrumb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\comment\CommentBreadcrumbBuilder A Drupal\comment\CommentBreadcrumbBuilder instance.
     */
    protected function getComment_BreadcrumbService()
    {
        return $this->services['comment.breadcrumb'] = new \Drupal\comment\CommentBreadcrumbBuilder($this->get('entity.manager'));
    }

    /**
     * Gets the 'comment.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\comment\CommentManager A Drupal\comment\CommentManager instance.
     */
    protected function getComment_ManagerService()
    {
        return $this->services['comment.manager'] = new \Drupal\comment\CommentManager($this->get('entity.manager'), $this->get('config.factory'), $this->get('string_translation'), $this->get('url_generator'));
    }

    /**
     * Gets the 'comment.route_enhancer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\comment\Routing\CommentBundleEnhancer A Drupal\comment\Routing\CommentBundleEnhancer instance.
     */
    protected function getComment_RouteEnhancerService()
    {
        return $this->services['comment.route_enhancer'] = new \Drupal\comment\Routing\CommentBundleEnhancer($this->get('entity.manager'));
    }

    /**
     * Gets the 'comment.statistics' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\comment\CommentStatistics A Drupal\comment\CommentStatistics instance.
     */
    protected function getComment_StatisticsService()
    {
        return $this->services['comment.statistics'] = new \Drupal\comment\CommentStatistics($this->get('database'), $this->get('current_user'), $this->get('entity.manager'), $this->get('state'));
    }

    /**
     * Gets the 'config.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\ConfigFactory A Drupal\Core\Config\ConfigFactory instance.
     */
    protected function getConfig_FactoryService()
    {
        return $this->services['config.factory'] = new \Drupal\Core\Config\ConfigFactory($this->get('config.storage.active'), $this->get('event_dispatcher'), $this->get('config.typed'));
    }

    /**
     * Gets the 'config.installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\ConfigInstaller A Drupal\Core\Config\ConfigInstaller instance.
     */
    protected function getConfig_InstallerService()
    {
        return $this->services['config.installer'] = new \Drupal\Core\Config\ConfigInstaller($this->get('config.factory'), $this->get('config.storage.active'), $this->get('config.typed'), $this->get('config.manager'), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'config.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\ConfigManager A Drupal\Core\Config\ConfigManager instance.
     */
    protected function getConfig_ManagerService()
    {
        return $this->services['config.manager'] = new \Drupal\Core\Config\ConfigManager($this->get('entity.manager'), $this->get('config.factory'), $this->get('config.typed'), $this->get('string_translation'), $this->get('config.storage.active'), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'config.storage.active' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\DatabaseStorage A Drupal\Core\Config\DatabaseStorage instance.
     */
    protected function getConfig_Storage_ActiveService()
    {
        return $this->services['config.storage.active'] = new \Drupal\Core\Config\DatabaseStorage($this->get('database'), 'config');
    }

    /**
     * Gets the 'config.storage.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\FileStorage A Drupal\Core\Config\FileStorage instance.
     */
    protected function getConfig_Storage_FileService()
    {
        return $this->services['config.storage.file'] = call_user_func(array('Drupal\\Core\\Config\\FileStorageFactory', 'getActive'));
    }

    /**
     * Gets the 'config.storage.installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\InstallStorage A Drupal\Core\Config\InstallStorage instance.
     */
    protected function getConfig_Storage_InstallerService()
    {
        return $this->services['config.storage.installer'] = new \Drupal\Core\Config\InstallStorage();
    }

    /**
     * Gets the 'config.storage.schema' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\ExtensionInstallStorage A Drupal\Core\Config\ExtensionInstallStorage instance.
     */
    protected function getConfig_Storage_SchemaService()
    {
        return $this->services['config.storage.schema'] = new \Drupal\Core\Config\ExtensionInstallStorage($this->get('config.storage.active'), 'config/schema');
    }

    /**
     * Gets the 'config.storage.snapshot' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\DatabaseStorage A Drupal\Core\Config\DatabaseStorage instance.
     */
    protected function getConfig_Storage_SnapshotService()
    {
        return $this->services['config.storage.snapshot'] = new \Drupal\Core\Config\DatabaseStorage($this->get('database'), 'config_snapshot');
    }

    /**
     * Gets the 'config.storage.staging' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\FileStorage A Drupal\Core\Config\FileStorage instance.
     */
    protected function getConfig_Storage_StagingService()
    {
        return $this->services['config.storage.staging'] = call_user_func(array('Drupal\\Core\\Config\\FileStorageFactory', 'getStaging'));
    }

    /**
     * Gets the 'config.typed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\TypedConfigManager A Drupal\Core\Config\TypedConfigManager instance.
     */
    protected function getConfig_TypedService()
    {
        return $this->services['config.typed'] = new \Drupal\Core\Config\TypedConfigManager($this->get('config.storage.active'), $this->get('config.storage.schema'), $this->get('cache.discovery'));
    }

    /**
     * Gets the 'config_import_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ConfigImportSubscriber A Drupal\Core\EventSubscriber\ConfigImportSubscriber instance.
     */
    protected function getConfigImportSubscriberService()
    {
        return $this->services['config_import_subscriber'] = new \Drupal\Core\EventSubscriber\ConfigImportSubscriber();
    }

    /**
     * Gets the 'config_snapshot_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber A Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber instance.
     */
    protected function getConfigSnapshotSubscriberService()
    {
        return $this->services['config_snapshot_subscriber'] = new \Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber($this->get('config.manager'), $this->get('config.storage.active'), $this->get('config.storage.snapshot'));
    }

    /**
     * Gets the 'container.namespaces' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return ArrayObject A ArrayObject instance.
     */
    protected function getContainer_NamespacesService()
    {
        return $this->services['container.namespaces'] = new \ArrayObject(array('Drupal\\block' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/block/lib/Drupal/block', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/block/src'), 'Drupal\\breakpoint' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/breakpoint/lib/Drupal/breakpoint', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/breakpoint/src'), 'Drupal\\ckeditor' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/ckeditor/lib/Drupal/ckeditor', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/ckeditor/src'), 'Drupal\\color' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/color/lib/Drupal/color', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/color/src'), 'Drupal\\comment' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/comment/lib/Drupal/comment', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/comment/src'), 'Drupal\\config' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/config/lib/Drupal/config', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/config/src'), 'Drupal\\contact' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/contact/lib/Drupal/contact', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/contact/src'), 'Drupal\\contextual' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/contextual/lib/Drupal/contextual', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/contextual/src'), 'Drupal\\custom_block' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/block/custom_block/lib/Drupal/custom_block', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/block/custom_block/src'), 'Drupal\\datetime' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/datetime/lib/Drupal/datetime', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/datetime/src'), 'Drupal\\dblog' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/dblog/lib/Drupal/dblog', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/dblog/src'), 'Drupal\\editor' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/editor/lib/Drupal/editor', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/editor/src'), 'Drupal\\entity' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/entity/lib/Drupal/entity', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/entity/src'), 'Drupal\\entity_reference' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/entity_reference/lib/Drupal/entity_reference', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/entity_reference/src'), 'Drupal\\field' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/field/lib/Drupal/field', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/field/src'), 'Drupal\\field_ui' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/field_ui/lib/Drupal/field_ui', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/field_ui/src'), 'Drupal\\file' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/file/lib/Drupal/file', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/file/src'), 'Drupal\\filter' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/filter/lib/Drupal/filter', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/filter/src'), 'Drupal\\help' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/help/lib/Drupal/help', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/help/src'), 'Drupal\\history' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/history/lib/Drupal/history', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/history/src'), 'Drupal\\image' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/image/lib/Drupal/image', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/image/src'), 'Drupal\\menu_link' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/menu_link/lib/Drupal/menu_link', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/menu_link/src'), 'Drupal\\menu_ui' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/menu_ui/lib/Drupal/menu_ui', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/menu_ui/src'), 'Drupal\\node' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/node/lib/Drupal/node', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/node/src'), 'Drupal\\options' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/options/lib/Drupal/options', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/options/src'), 'Drupal\\path' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/path/lib/Drupal/path', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/path/src'), 'Drupal\\quickedit' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/quickedit/lib/Drupal/quickedit', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/quickedit/src'), 'Drupal\\rdf' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/rdf/lib/Drupal/rdf', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/rdf/src'), 'Drupal\\search' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/search/lib/Drupal/search', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/search/src'), 'Drupal\\shortcut' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/shortcut/lib/Drupal/shortcut', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/shortcut/src'), 'Drupal\\standard' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/profiles/standard/lib/Drupal/standard', 1 => '/Applications/MAMP/htdocs/drupal8/core/profiles/standard/src'), 'Drupal\\system' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/system/lib/Drupal/system', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/system/src'), 'Drupal\\taxonomy' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/taxonomy/lib/Drupal/taxonomy', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/taxonomy/src'), 'Drupal\\text' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/text/lib/Drupal/text', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/text/src'), 'Drupal\\toolbar' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/toolbar/lib/Drupal/toolbar', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/toolbar/src'), 'Drupal\\tour' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/tour/lib/Drupal/tour', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/tour/src'), 'Drupal\\user' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/user/lib/Drupal/user', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/user/src'), 'Drupal\\views_ui' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/views_ui/lib/Drupal/views_ui', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/views_ui/src'), 'Drupal\\views' => array(0 => '/Applications/MAMP/htdocs/drupal8/core/modules/views/lib/Drupal/views', 1 => '/Applications/MAMP/htdocs/drupal8/core/modules/views/src'), 'Drupal\\Core\\Entity' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Core/Entity', 'Drupal\\Core\\Field' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Core/Field', 'Drupal\\Core\\Mail' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Core/Mail', 'Drupal\\Core\\TypedData' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Core/TypedData', 'Drupal\\Core\\Validation' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Core/Validation', 'Drupal\\Component\\Annotation' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Component/Annotation'));
    }

    /**
     * Gets the 'content_negotiation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ContentNegotiation A Drupal\Core\ContentNegotiation instance.
     */
    protected function getContentNegotiationService()
    {
        return $this->services['content_negotiation'] = new \Drupal\Core\ContentNegotiation();
    }

    /**
     * Gets the 'content_type_header_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\ContentTypeHeaderMatcher A Drupal\Core\Routing\ContentTypeHeaderMatcher instance.
     */
    protected function getContentTypeHeaderMatcherService()
    {
        return $this->services['content_type_header_matcher'] = new \Drupal\Core\Routing\ContentTypeHeaderMatcher();
    }

    /**
     * Gets the 'controller.ajax' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\AjaxController A Drupal\Core\Controller\AjaxController instance.
     */
    protected function getController_AjaxService()
    {
        return $this->services['controller.ajax'] = new \Drupal\Core\Controller\AjaxController($this->get('controller_resolver'), $this->get('ajax_response_renderer'));
    }

    /**
     * Gets the 'controller.dialog' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\DialogController A Drupal\Core\Controller\DialogController instance.
     */
    protected function getController_DialogService()
    {
        return $this->services['controller.dialog'] = new \Drupal\Core\Controller\DialogController($this->get('controller_resolver'), $this->get('title_resolver'));
    }

    /**
     * Gets the 'controller.entityform' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\HtmlEntityFormController A Drupal\Core\Entity\HtmlEntityFormController instance.
     */
    protected function getController_EntityformService()
    {
        return $this->services['controller.entityform'] = new \Drupal\Core\Entity\HtmlEntityFormController($this->get('class_resolver'), $this->get('controller_resolver'), $this, $this->get('entity.manager'));
    }

    /**
     * Gets the 'controller.page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\HtmlPageController A Drupal\Core\Controller\HtmlPageController instance.
     */
    protected function getController_PageService()
    {
        return $this->services['controller.page'] = new \Drupal\Core\Controller\HtmlPageController($this->get('controller_resolver'), $this->get('title_resolver'), $this->get('url_generator'));
    }

    /**
     * Gets the 'controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\ControllerResolver A Drupal\Core\Controller\ControllerResolver instance.
     */
    protected function getControllerResolverService()
    {
        return $this->services['controller_resolver'] = new \Drupal\Core\Controller\ControllerResolver($this->get('class_resolver'), $this->get('logger.channel.default'));
    }

    /**
     * Gets the 'country_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Locale\CountryManager A Drupal\Core\Locale\CountryManager instance.
     */
    protected function getCountryManagerService()
    {
        return $this->services['country_manager'] = new \Drupal\Core\Locale\CountryManager($this->get('module_handler'));
    }

    /**
     * Gets the 'cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cron A Drupal\Core\Cron instance.
     */
    protected function getCronService()
    {
        return $this->services['cron'] = new \Drupal\Core\Cron($this->get('module_handler'), $this->get('lock'), $this->get('queue'), $this->get('state'), $this->get('current_user'), $this->get('session_manager'));
    }

    /**
     * Gets the 'csrf_token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\CsrfTokenGenerator A Drupal\Core\Access\CsrfTokenGenerator instance.
     */
    protected function getCsrfTokenService()
    {
        return $this->services['csrf_token'] = new \Drupal\Core\Access\CsrfTokenGenerator($this->get('private_key'));
    }

    /**
     * Gets the 'current_user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Session\AccountProxy A Drupal\Core\Session\AccountProxy instance.
     */
    protected function getCurrentUserService()
    {
        return $this->services['current_user'] = new \Drupal\Core\Session\AccountProxy($this->get('authentication'), $this->get('request'));
    }

    /**
     * Gets the 'database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Database\Connection A Drupal\Core\Database\Connection instance.
     */
    protected function getDatabaseService()
    {
        return $this->services['database'] = call_user_func(array('Drupal\\Core\\Database\\Database', 'getConnection'), 'default');
    }

    /**
     * Gets the 'database.slave' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Database\Connection A Drupal\Core\Database\Connection instance.
     */
    protected function getDatabase_SlaveService()
    {
        return $this->services['database.slave'] = call_user_func(array('Drupal\\Core\\Database\\Database', 'getConnection'), 'slave');
    }

    /**
     * Gets the 'date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Datetime\Date A Drupal\Core\Datetime\Date instance.
     */
    protected function getDateService()
    {
        return $this->services['date'] = new \Drupal\Core\Datetime\Date($this->get('entity.manager'), $this->get('language_manager'), $this->get('string_translation'), $this->get('config.factory'));
    }

    /**
     * Gets the 'element_info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Render\ElementInfo A Drupal\Core\Render\ElementInfo instance.
     */
    protected function getElementInfoService()
    {
        return $this->services['element_info'] = new \Drupal\Core\Render\ElementInfo($this->get('module_handler'));
    }

    /**
     * Gets the 'entity.form_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityFormBuilder A Drupal\Core\Entity\EntityFormBuilder instance.
     */
    protected function getEntity_FormBuilderService()
    {
        return $this->services['entity.form_builder'] = new \Drupal\Core\Entity\EntityFormBuilder($this->get('entity.manager'), $this->get('form_builder'));
    }

    /**
     * Gets the 'entity.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityManager A Drupal\Core\Entity\EntityManager instance.
     */
    protected function getEntity_ManagerService()
    {
        $this->services['entity.manager'] = $instance = new \Drupal\Core\Entity\EntityManager($this->get('container.namespaces'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('string_translation'), $this->get('class_resolver'), $this->get('typed_data_manager'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'entity.query' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\Query\QueryFactory A Drupal\Core\Entity\Query\QueryFactory instance.
     */
    protected function getEntity_QueryService()
    {
        $this->services['entity.query'] = $instance = new \Drupal\Core\Entity\Query\QueryFactory($this->get('entity.manager'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'entity.query.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\Entity\Query\QueryFactory A Drupal\Core\Config\Entity\Query\QueryFactory instance.
     */
    protected function getEntity_Query_ConfigService()
    {
        return $this->services['entity.query.config'] = new \Drupal\Core\Config\Entity\Query\QueryFactory($this->get('config.storage.active'), $this->get('config.factory'));
    }

    /**
     * Gets the 'entity.query.keyvalue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\KeyValueStore\Query\QueryFactory A Drupal\Core\Entity\KeyValueStore\Query\QueryFactory instance.
     */
    protected function getEntity_Query_KeyvalueService()
    {
        return $this->services['entity.query.keyvalue'] = new \Drupal\Core\Entity\KeyValueStore\Query\QueryFactory($this->get('keyvalue'));
    }

    /**
     * Gets the 'entity.query.sql' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\Query\Sql\QueryFactory A Drupal\Core\Entity\Query\Sql\QueryFactory instance.
     */
    protected function getEntity_Query_SqlService()
    {
        return $this->services['entity.query.sql'] = new \Drupal\Core\Entity\Query\Sql\QueryFactory($this->get('database'));
    }

    /**
     * Gets the 'entity_reference.autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\entity_reference\EntityReferenceAutocomplete A Drupal\entity_reference\EntityReferenceAutocomplete instance.
     */
    protected function getEntityReference_AutocompleteService()
    {
        return $this->services['entity_reference.autocomplete'] = new \Drupal\entity_reference\EntityReferenceAutocomplete($this->get('entity.manager'), $this->get('plugin.manager.entity_reference.selection'));
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('config.factory', 'Drupal\\Core\\Config\\ConfigFactory');
        $instance->addSubscriberService('router.route_provider', 'Drupal\\Core\\Routing\\RouteProvider');
        $instance->addSubscriberService('router.route_preloader', 'Drupal\\Core\\Routing\\RoutePreloader');
        $instance->addSubscriberService('router.path_roots_subscriber', 'Drupal\\Core\\EventSubscriber\\PathRootsSubscriber');
        $instance->addSubscriberService('router.rebuild_subscriber', 'Drupal\\Core\\EventSubscriber\\RouterRebuildSubscriber');
        $instance->addSubscriberService('paramconverter_subscriber', 'Drupal\\Core\\EventSubscriber\\ParamConverterSubscriber');
        $instance->addSubscriberService('route_subscriber.module', 'Drupal\\Core\\EventSubscriber\\ModuleRouteSubscriber');
        $instance->addSubscriberService('route_subscriber.entity', 'Drupal\\Core\\EventSubscriber\\EntityRouteAlterSubscriber');
        $instance->addSubscriberService('reverse_proxy_subscriber', 'Drupal\\Core\\EventSubscriber\\ReverseProxySubscriber');
        $instance->addSubscriberService('ajax_response_subscriber', 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber');
        $instance->addSubscriberService('route_enhancer.param_conversion', 'Drupal\\Core\\Routing\\Enhancer\\ParamConversionEnhancer');
        $instance->addSubscriberService('route_content_controller_subscriber', 'Drupal\\Core\\EventSubscriber\\ContentControllerSubscriber');
        $instance->addSubscriberService('route_content_form_controller_subscriber', 'Drupal\\Core\\EventSubscriber\\ContentFormControllerSubscriber');
        $instance->addSubscriberService('route_special_attributes_subscriber', 'Drupal\\Core\\EventSubscriber\\SpecialAttributesRouteSubscriber');
        $instance->addSubscriberService('route_http_method_subscriber', 'Drupal\\Core\\EventSubscriber\\RouteMethodSubscriber');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('view_subscriber', 'Drupal\\Core\\EventSubscriber\\ViewSubscriber');
        $instance->addSubscriberService('html_view_subscriber', 'Drupal\\Core\\EventSubscriber\\HtmlViewSubscriber');
        $instance->addSubscriberService('access_subscriber', 'Drupal\\Core\\EventSubscriber\\AccessSubscriber');
        $instance->addSubscriberService('access_route_subscriber', 'Drupal\\Core\\EventSubscriber\\AccessRouteSubscriber');
        $instance->addSubscriberService('maintenance_mode_subscriber', 'Drupal\\Core\\EventSubscriber\\MaintenanceModeSubscriber');
        $instance->addSubscriberService('path_subscriber', 'Drupal\\Core\\EventSubscriber\\PathSubscriber');
        $instance->addSubscriberService('legacy_request_subscriber', 'Drupal\\Core\\EventSubscriber\\LegacyRequestSubscriber');
        $instance->addSubscriberService('finish_response_subscriber', 'Drupal\\Core\\EventSubscriber\\FinishResponseSubscriber');
        $instance->addSubscriberService('redirect_response_subscriber', 'Drupal\\Core\\EventSubscriber\\RedirectResponseSubscriber');
        $instance->addSubscriberService('request_close_subscriber', 'Drupal\\Core\\EventSubscriber\\RequestCloseSubscriber');
        $instance->addSubscriberService('config_import_subscriber', 'Drupal\\Core\\EventSubscriber\\ConfigImportSubscriber');
        $instance->addSubscriberService('config_snapshot_subscriber', 'Drupal\\Core\\EventSubscriber\\ConfigSnapshotSubscriber');
        $instance->addSubscriberService('exception_listener', 'Drupal\\Core\\EventSubscriber\\ExceptionListener');
        $instance->addSubscriberService('kernel_destruct_subscriber', 'Drupal\\Core\\EventSubscriber\\KernelDestructionSubscriber');
        $instance->addSubscriberService('ajax.subscriber', 'Drupal\\Core\\Ajax\\AjaxSubscriber');
        $instance->addSubscriberService('slave_database_ignore__subscriber', 'Drupal\\Core\\EventSubscriber\\SlaveDatabaseIgnoreSubscriber');
        $instance->addSubscriberService('authentication_subscriber', 'Drupal\\Core\\EventSubscriber\\AuthenticationSubscriber');
        $instance->addSubscriberService('field_ui.subscriber', 'Drupal\\field_ui\\Routing\\RouteSubscriber');
        $instance->addSubscriberService('node.admin_path.route_subscriber', 'Drupal\\node\\EventSubscriber\\NodeAdminRouteSubscriber');
        $instance->addSubscriberService('system.admin_path.route_subscriber', 'Drupal\\system\\EventSubscriber\\AdminRouteSubscriber');
        $instance->addSubscriberService('system.config_subscriber', 'Drupal\\system\\SystemConfigSubscriber');
        $instance->addSubscriberService('system.automatic_cron', 'Drupal\\system\\EventSubscriber\\AutomaticCron');
        $instance->addSubscriberService('user_maintenance_mode_subscriber', 'Drupal\\user\\EventSubscriber\\MaintenanceModeSubscriber');
        $instance->addSubscriberService('views.route_subscriber', 'Drupal\\views\\EventSubscriber\\RouteSubscriber');

        return $instance;
    }

    /**
     * Gets the 'exception_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\ExceptionController A Drupal\Core\Controller\ExceptionController instance.
     */
    protected function getExceptionControllerService()
    {
        $this->services['exception_controller'] = $instance = new \Drupal\Core\Controller\ExceptionController($this->get('content_negotiation'), $this->get('title_resolver'), $this->get('html_page_renderer'), $this->get('html_fragment_renderer'), $this->get('string_translation'), $this->get('url_generator'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ExceptionListener A Drupal\Core\EventSubscriber\ExceptionListener instance.
     */
    protected function getExceptionListenerService()
    {
        return $this->services['exception_listener'] = new \Drupal\Core\EventSubscriber\ExceptionListener(array(0 => $this->get('exception_controller'), 1 => 'execute'));
    }

    /**
     * Gets the 'feed.bridge.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Bridge\ZfExtensionManagerSfContainer A Drupal\Component\Bridge\ZfExtensionManagerSfContainer instance.
     */
    protected function getFeed_Bridge_ReaderService()
    {
        $this->services['feed.bridge.reader'] = $instance = new \Drupal\Component\Bridge\ZfExtensionManagerSfContainer('feed.reader.');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'feed.bridge.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Bridge\ZfExtensionManagerSfContainer A Drupal\Component\Bridge\ZfExtensionManagerSfContainer instance.
     */
    protected function getFeed_Bridge_WriterService()
    {
        $this->services['feed.bridge.writer'] = $instance = new \Drupal\Component\Bridge\ZfExtensionManagerSfContainer('feed.writer.');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'feed.reader.atomentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Atom\Entry A Zend\Feed\Reader\Extension\Atom\Entry instance.
     */
    protected function getFeed_Reader_AtomentryService()
    {
        return $this->services['feed.reader.atomentry'] = new \Zend\Feed\Reader\Extension\Atom\Entry();
    }

    /**
     * Gets the 'feed.reader.atomfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Atom\Feed A Zend\Feed\Reader\Extension\Atom\Feed instance.
     */
    protected function getFeed_Reader_AtomfeedService()
    {
        return $this->services['feed.reader.atomfeed'] = new \Zend\Feed\Reader\Extension\Atom\Feed();
    }

    /**
     * Gets the 'feed.reader.contententry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Content\Entry A Zend\Feed\Reader\Extension\Content\Entry instance.
     */
    protected function getFeed_Reader_ContententryService()
    {
        return $this->services['feed.reader.contententry'] = new \Zend\Feed\Reader\Extension\Content\Entry();
    }

    /**
     * Gets the 'feed.reader.dublincoreentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\DublinCore\Entry A Zend\Feed\Reader\Extension\DublinCore\Entry instance.
     */
    protected function getFeed_Reader_DublincoreentryService()
    {
        return $this->services['feed.reader.dublincoreentry'] = new \Zend\Feed\Reader\Extension\DublinCore\Entry();
    }

    /**
     * Gets the 'feed.reader.dublincorefeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\DublinCore\Feed A Zend\Feed\Reader\Extension\DublinCore\Feed instance.
     */
    protected function getFeed_Reader_DublincorefeedService()
    {
        return $this->services['feed.reader.dublincorefeed'] = new \Zend\Feed\Reader\Extension\DublinCore\Feed();
    }

    /**
     * Gets the 'feed.reader.podcastentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Podcast\Entry A Zend\Feed\Reader\Extension\Podcast\Entry instance.
     */
    protected function getFeed_Reader_PodcastentryService()
    {
        return $this->services['feed.reader.podcastentry'] = new \Zend\Feed\Reader\Extension\Podcast\Entry();
    }

    /**
     * Gets the 'feed.reader.podcastfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Podcast\Feed A Zend\Feed\Reader\Extension\Podcast\Feed instance.
     */
    protected function getFeed_Reader_PodcastfeedService()
    {
        return $this->services['feed.reader.podcastfeed'] = new \Zend\Feed\Reader\Extension\Podcast\Feed();
    }

    /**
     * Gets the 'feed.reader.slashentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Slash\Entry A Zend\Feed\Reader\Extension\Slash\Entry instance.
     */
    protected function getFeed_Reader_SlashentryService()
    {
        return $this->services['feed.reader.slashentry'] = new \Zend\Feed\Reader\Extension\Slash\Entry();
    }

    /**
     * Gets the 'feed.reader.threadentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Thread\Entry A Zend\Feed\Reader\Extension\Thread\Entry instance.
     */
    protected function getFeed_Reader_ThreadentryService()
    {
        return $this->services['feed.reader.threadentry'] = new \Zend\Feed\Reader\Extension\Thread\Entry();
    }

    /**
     * Gets the 'feed.reader.wellformedwebentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\WellFormedWeb\Entry A Zend\Feed\Reader\Extension\WellFormedWeb\Entry instance.
     */
    protected function getFeed_Reader_WellformedwebentryService()
    {
        return $this->services['feed.reader.wellformedwebentry'] = new \Zend\Feed\Reader\Extension\WellFormedWeb\Entry();
    }

    /**
     * Gets the 'feed.writer.atomrendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Atom\Renderer\Feed A Zend\Feed\Writer\Extension\Atom\Renderer\Feed instance.
     */
    protected function getFeed_Writer_AtomrendererfeedService()
    {
        return $this->services['feed.writer.atomrendererfeed'] = new \Zend\Feed\Writer\Extension\Atom\Renderer\Feed();
    }

    /**
     * Gets the 'feed.writer.contentrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Content\Renderer\Entry A Zend\Feed\Writer\Extension\Content\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ContentrendererentryService()
    {
        return $this->services['feed.writer.contentrendererentry'] = new \Zend\Feed\Writer\Extension\Content\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.dublincorerendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry A Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry instance.
     */
    protected function getFeed_Writer_DublincorerendererentryService()
    {
        return $this->services['feed.writer.dublincorerendererentry'] = new \Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.dublincorerendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed A Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed instance.
     */
    protected function getFeed_Writer_DublincorerendererfeedService()
    {
        return $this->services['feed.writer.dublincorerendererfeed'] = new \Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed();
    }

    /**
     * Gets the 'feed.writer.itunesentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Entry A Zend\Feed\Writer\Extension\ITunes\Entry instance.
     */
    protected function getFeed_Writer_ItunesentryService()
    {
        return $this->services['feed.writer.itunesentry'] = new \Zend\Feed\Writer\Extension\ITunes\Entry();
    }

    /**
     * Gets the 'feed.writer.itunesfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Feed A Zend\Feed\Writer\Extension\ITunes\Feed instance.
     */
    protected function getFeed_Writer_ItunesfeedService()
    {
        return $this->services['feed.writer.itunesfeed'] = new \Zend\Feed\Writer\Extension\ITunes\Feed();
    }

    /**
     * Gets the 'feed.writer.itunesrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Renderer\Entry A Zend\Feed\Writer\Extension\ITunes\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ItunesrendererentryService()
    {
        return $this->services['feed.writer.itunesrendererentry'] = new \Zend\Feed\Writer\Extension\ITunes\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.itunesrendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Renderer\Feed A Zend\Feed\Writer\Extension\ITunes\Renderer\Feed instance.
     */
    protected function getFeed_Writer_ItunesrendererfeedService()
    {
        return $this->services['feed.writer.itunesrendererfeed'] = new \Zend\Feed\Writer\Extension\ITunes\Renderer\Feed();
    }

    /**
     * Gets the 'feed.writer.slashrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Slash\Renderer\Entry A Zend\Feed\Writer\Extension\Slash\Renderer\Entry instance.
     */
    protected function getFeed_Writer_SlashrendererentryService()
    {
        return $this->services['feed.writer.slashrendererentry'] = new \Zend\Feed\Writer\Extension\Slash\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.threadingrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Threading\Renderer\Entry A Zend\Feed\Writer\Extension\Threading\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ThreadingrendererentryService()
    {
        return $this->services['feed.writer.threadingrendererentry'] = new \Zend\Feed\Writer\Extension\Threading\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.wellformedwebrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry A Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry instance.
     */
    protected function getFeed_Writer_WellformedwebrendererentryService()
    {
        return $this->services['feed.writer.wellformedwebrendererentry'] = new \Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry();
    }

    /**
     * Gets the 'field_ui.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\field_ui\Routing\RouteSubscriber A Drupal\field_ui\Routing\RouteSubscriber instance.
     */
    protected function getFieldUi_SubscriberService()
    {
        return $this->services['field_ui.subscriber'] = new \Drupal\field_ui\Routing\RouteSubscriber($this->get('entity.manager'));
    }

    /**
     * Gets the 'file.usage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\file\FileUsage\DatabaseFileUsageBackend A Drupal\file\FileUsage\DatabaseFileUsageBackend instance.
     */
    protected function getFile_UsageService()
    {
        return $this->services['file.usage'] = new \Drupal\file\FileUsage\DatabaseFileUsageBackend($this->get('database'));
    }

    /**
     * Gets the 'finish_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\FinishResponseSubscriber A Drupal\Core\EventSubscriber\FinishResponseSubscriber instance.
     * 
     * @throws InactiveScopeException when the 'finish_response_subscriber' service is requested while the 'request' scope is not active
     */
    protected function getFinishResponseSubscriberService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('finish_response_subscriber', 'request');
        }

        return $this->services['finish_response_subscriber'] = $this->scopedServices['request']['finish_response_subscriber'] = new \Drupal\Core\EventSubscriber\FinishResponseSubscriber($this->get('language_manager'), $this->get('config.factory'));
    }

    /**
     * Gets the 'flood' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Flood\DatabaseBackend A Drupal\Core\Flood\DatabaseBackend instance.
     */
    protected function getFloodService()
    {
        return $this->services['flood'] = new \Drupal\Core\Flood\DatabaseBackend($this->get('database'), $this->get('request_stack'));
    }

    /**
     * Gets the 'form_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Form\FormBuilder A Drupal\Core\Form\FormBuilder instance.
     */
    protected function getFormBuilderService()
    {
        return $this->services['form_builder'] = new \Drupal\Core\Form\FormBuilder($this->get('form_validator'), $this->get('form_submitter'), $this->get('module_handler'), $this->get('keyvalue.expirable'), $this->get('event_dispatcher'), $this->get('request_stack'), $this->get('class_resolver'), $this->get('csrf_token', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('http_kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'form_submitter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Form\FormSubmitter A Drupal\Core\Form\FormSubmitter instance.
     */
    protected function getFormSubmitterService()
    {
        return $this->services['form_submitter'] = new \Drupal\Core\Form\FormSubmitter($this->get('request_stack'), $this->get('url_generator'));
    }

    /**
     * Gets the 'form_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Form\FormValidator A Drupal\Core\Form\FormValidator instance.
     */
    protected function getFormValidatorService()
    {
        return $this->services['form_validator'] = new \Drupal\Core\Form\FormValidator($this->get('request_stack'), $this->get('string_translation'), $this->get('csrf_token'));
    }

    /**
     * Gets the 'html_fragment_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Page\DefaultHtmlFragmentRenderer A Drupal\Core\Page\DefaultHtmlFragmentRenderer instance.
     */
    protected function getHtmlFragmentRendererService()
    {
        return $this->services['html_fragment_renderer'] = new \Drupal\Core\Page\DefaultHtmlFragmentRenderer($this->get('language_manager'));
    }

    /**
     * Gets the 'html_page_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Page\DefaultHtmlPageRenderer A Drupal\Core\Page\DefaultHtmlPageRenderer instance.
     */
    protected function getHtmlPageRendererService()
    {
        return $this->services['html_page_renderer'] = new \Drupal\Core\Page\DefaultHtmlPageRenderer();
    }

    /**
     * Gets the 'html_view_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\HtmlViewSubscriber A Drupal\Core\EventSubscriber\HtmlViewSubscriber instance.
     */
    protected function getHtmlViewSubscriberService()
    {
        return $this->services['html_view_subscriber'] = new \Drupal\Core\EventSubscriber\HtmlViewSubscriber($this->get('html_fragment_renderer'), $this->get('html_page_renderer'));
    }

    /**
     * Gets the 'http_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Http\Client A Drupal\Core\Http\Client instance.
     */
    protected function getHttpClientService()
    {
        return $this->services['http_client'] = new \Drupal\Core\Http\Client();
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\HttpKernel A Drupal\Core\HttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        $this->services['http_kernel'] = $instance = new \Drupal\Core\HttpKernel($this->get('event_dispatcher'), $this->get('controller_resolver'), $this->get('request_stack'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'image.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Image\ImageFactory A Drupal\Core\Image\ImageFactory instance.
     */
    protected function getImage_FactoryService()
    {
        return $this->services['image.factory'] = new \Drupal\Core\Image\ImageFactory($this->get('image.toolkit.manager'));
    }

    /**
     * Gets the 'image.toolkit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ImageToolkit\ImageToolkitManager A Drupal\Core\ImageToolkit\ImageToolkitManager instance.
     */
    protected function getImage_Toolkit_ManagerService()
    {
        return $this->services['image.toolkit.manager'] = new \Drupal\Core\ImageToolkit\ImageToolkitManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('config.factory'), $this->get('module_handler'));
    }

    /**
     * Gets the 'info_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Extension\InfoParser A Drupal\Core\Extension\InfoParser instance.
     */
    protected function getInfoParserService()
    {
        return $this->services['info_parser'] = new \Drupal\Core\Extension\InfoParser();
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel_destruct_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\KernelDestructionSubscriber A Drupal\Core\EventSubscriber\KernelDestructionSubscriber instance.
     */
    protected function getKernelDestructSubscriberService()
    {
        $this->services['kernel_destruct_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\KernelDestructionSubscriber();

        $instance->setContainer($this);
        $instance->registerService('keyvalue.expirable.database');
        $instance->registerService('path.alias_whitelist');
        $instance->registerService('theme.registry');

        return $instance;
    }

    /**
     * Gets the 'keyvalue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueFactory A Drupal\Core\KeyValueStore\KeyValueFactory instance.
     */
    protected function getKeyvalueService()
    {
        return $this->services['keyvalue'] = new \Drupal\Core\KeyValueStore\KeyValueFactory($this, $this->get('settings'));
    }

    /**
     * Gets the 'keyvalue.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueDatabaseFactory A Drupal\Core\KeyValueStore\KeyValueDatabaseFactory instance.
     */
    protected function getKeyvalue_DatabaseService()
    {
        return $this->services['keyvalue.database'] = new \Drupal\Core\KeyValueStore\KeyValueDatabaseFactory($this->get('serialization.phpserialize'), $this->get('database'));
    }

    /**
     * Gets the 'keyvalue.expirable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueExpirableFactory A Drupal\Core\KeyValueStore\KeyValueExpirableFactory instance.
     */
    protected function getKeyvalue_ExpirableService()
    {
        return $this->services['keyvalue.expirable'] = new \Drupal\Core\KeyValueStore\KeyValueExpirableFactory($this, $this->get('settings'));
    }

    /**
     * Gets the 'keyvalue.expirable.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory A Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory instance.
     */
    protected function getKeyvalue_Expirable_DatabaseService()
    {
        return $this->services['keyvalue.expirable.database'] = new \Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory($this->get('serialization.phpserialize'), $this->get('database'));
    }

    /**
     * Gets the 'language.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Language\LanguageDefault A Drupal\Core\Language\LanguageDefault instance.
     */
    protected function getLanguage_DefaultService()
    {
        return $this->services['language.default'] = new \Drupal\Core\Language\LanguageDefault(array('id' => 'en', 'name' => 'English', 'direction' => 0, 'weight' => 0, 'locked' => 0, 'default' => true));
    }

    /**
     * Gets the 'language_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Language\LanguageManager A Drupal\Core\Language\LanguageManager instance.
     */
    protected function getLanguageManagerService()
    {
        return $this->services['language_manager'] = new \Drupal\Core\Language\LanguageManager($this->get('language.default'));
    }

    /**
     * Gets the 'legacy_request_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\LegacyRequestSubscriber A Drupal\Core\EventSubscriber\LegacyRequestSubscriber instance.
     */
    protected function getLegacyRequestSubscriberService()
    {
        return $this->services['legacy_request_subscriber'] = new \Drupal\Core\EventSubscriber\LegacyRequestSubscriber();
    }

    /**
     * Gets the 'library.discovery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\LibraryDiscovery A Drupal\Core\Asset\LibraryDiscovery instance.
     */
    protected function getLibrary_DiscoveryService()
    {
        return $this->services['library.discovery'] = new \Drupal\Core\Asset\LibraryDiscovery($this->get('cache.discovery'), $this->get('module_handler'));
    }

    /**
     * Gets the 'link_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Utility\LinkGenerator A Drupal\Core\Utility\LinkGenerator instance.
     */
    protected function getLinkGeneratorService()
    {
        return $this->services['link_generator'] = new \Drupal\Core\Utility\LinkGenerator($this->get('url_generator'), $this->get('module_handler'));
    }

    /**
     * Gets the 'lock' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Lock\DatabaseLockBackend A Drupal\Core\Lock\DatabaseLockBackend instance.
     */
    protected function getLockService()
    {
        return $this->services['lock'] = new \Drupal\Core\Lock\DatabaseLockBackend($this->get('database'));
    }

    /**
     * Gets the 'logger.channel.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_DefaultService()
    {
        return $this->services['logger.channel.default'] = $this->get('logger.factory')->get('system');
    }

    /**
     * Gets the 'logger.dblog' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\dblog\Logger\DbLog A Drupal\dblog\Logger\DbLog instance.
     */
    protected function getLogger_DblogService()
    {
        return $this->services['logger.dblog'] = new \Drupal\dblog\Logger\DbLog($this->get('database'), $this->get('logger.log_message_parser'));
    }

    /**
     * Gets the 'logger.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Logger\LoggerChannelFactory A Drupal\Core\Logger\LoggerChannelFactory instance.
     */
    protected function getLogger_FactoryService()
    {
        $this->services['logger.factory'] = $instance = new \Drupal\Core\Logger\LoggerChannelFactory();

        $instance->setContainer($this);
        $instance->addLogger($this->get('logger.dblog'), 0);

        return $instance;
    }

    /**
     * Gets the 'logger.log_message_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Logger\LogMessageParser A Drupal\Core\Logger\LogMessageParser instance.
     */
    protected function getLogger_LogMessageParserService()
    {
        return $this->services['logger.log_message_parser'] = new \Drupal\Core\Logger\LogMessageParser();
    }

    /**
     * Gets the 'maintenance_mode_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\MaintenanceModeSubscriber A Drupal\Core\EventSubscriber\MaintenanceModeSubscriber instance.
     */
    protected function getMaintenanceModeSubscriberService()
    {
        return $this->services['maintenance_mode_subscriber'] = new \Drupal\Core\EventSubscriber\MaintenanceModeSubscriber($this->get('state'), $this->get('config.factory'), $this->get('string_translation'), $this->get('url_generator'), $this->get('current_user'));
    }

    /**
     * Gets the 'menu_link.static' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\menu_link\StaticMenuLinks A Drupal\menu_link\StaticMenuLinks instance.
     */
    protected function getMenuLink_StaticService()
    {
        return $this->services['menu_link.static'] = new \Drupal\menu_link\StaticMenuLinks($this->get('module_handler'));
    }

    /**
     * Gets the 'menu_link.tree' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\menu_link\MenuTree A Drupal\menu_link\MenuTree instance.
     */
    protected function getMenuLink_TreeService()
    {
        return $this->services['menu_link.tree'] = new \Drupal\menu_link\MenuTree($this->get('database'), $this->get('cache.data'), $this->get('language_manager'), $this->get('request_stack'), $this->get('entity.manager'), $this->get('entity.query'), $this->get('state'));
    }

    /**
     * Gets the 'module_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Extension\ModuleHandler A Drupal\Core\Extension\ModuleHandler instance.
     */
    protected function getModuleHandlerService()
    {
        return $this->services['module_handler'] = new \Drupal\Core\Extension\ModuleHandler(array('block' => array('type' => 'module', 'pathname' => 'core/modules/block/block.info.yml', 'filename' => 'block.module'), 'breakpoint' => array('type' => 'module', 'pathname' => 'core/modules/breakpoint/breakpoint.info.yml', 'filename' => 'breakpoint.module'), 'ckeditor' => array('type' => 'module', 'pathname' => 'core/modules/ckeditor/ckeditor.info.yml', 'filename' => 'ckeditor.module'), 'color' => array('type' => 'module', 'pathname' => 'core/modules/color/color.info.yml', 'filename' => 'color.module'), 'comment' => array('type' => 'module', 'pathname' => 'core/modules/comment/comment.info.yml', 'filename' => 'comment.module'), 'config' => array('type' => 'module', 'pathname' => 'core/modules/config/config.info.yml', 'filename' => 'config.module'), 'contact' => array('type' => 'module', 'pathname' => 'core/modules/contact/contact.info.yml', 'filename' => 'contact.module'), 'contextual' => array('type' => 'module', 'pathname' => 'core/modules/contextual/contextual.info.yml', 'filename' => 'contextual.module'), 'custom_block' => array('type' => 'module', 'pathname' => 'core/modules/block/custom_block/custom_block.info.yml', 'filename' => 'custom_block.module'), 'datetime' => array('type' => 'module', 'pathname' => 'core/modules/datetime/datetime.info.yml', 'filename' => 'datetime.module'), 'dblog' => array('type' => 'module', 'pathname' => 'core/modules/dblog/dblog.info.yml', 'filename' => 'dblog.module'), 'editor' => array('type' => 'module', 'pathname' => 'core/modules/editor/editor.info.yml', 'filename' => 'editor.module'), 'entity' => array('type' => 'module', 'pathname' => 'core/modules/entity/entity.info.yml', 'filename' => 'entity.module'), 'entity_reference' => array('type' => 'module', 'pathname' => 'core/modules/entity_reference/entity_reference.info.yml', 'filename' => 'entity_reference.module'), 'field' => array('type' => 'module', 'pathname' => 'core/modules/field/field.info.yml', 'filename' => 'field.module'), 'field_ui' => array('type' => 'module', 'pathname' => 'core/modules/field_ui/field_ui.info.yml', 'filename' => 'field_ui.module'), 'file' => array('type' => 'module', 'pathname' => 'core/modules/file/file.info.yml', 'filename' => 'file.module'), 'filter' => array('type' => 'module', 'pathname' => 'core/modules/filter/filter.info.yml', 'filename' => 'filter.module'), 'help' => array('type' => 'module', 'pathname' => 'core/modules/help/help.info.yml', 'filename' => 'help.module'), 'history' => array('type' => 'module', 'pathname' => 'core/modules/history/history.info.yml', 'filename' => 'history.module'), 'image' => array('type' => 'module', 'pathname' => 'core/modules/image/image.info.yml', 'filename' => 'image.module'), 'menu_link' => array('type' => 'module', 'pathname' => 'core/modules/menu_link/menu_link.info.yml', 'filename' => 'menu_link.module'), 'menu_ui' => array('type' => 'module', 'pathname' => 'core/modules/menu_ui/menu_ui.info.yml', 'filename' => 'menu_ui.module'), 'node' => array('type' => 'module', 'pathname' => 'core/modules/node/node.info.yml', 'filename' => 'node.module'), 'options' => array('type' => 'module', 'pathname' => 'core/modules/options/options.info.yml', 'filename' => 'options.module'), 'path' => array('type' => 'module', 'pathname' => 'core/modules/path/path.info.yml', 'filename' => 'path.module'), 'quickedit' => array('type' => 'module', 'pathname' => 'core/modules/quickedit/quickedit.info.yml', 'filename' => 'quickedit.module'), 'rdf' => array('type' => 'module', 'pathname' => 'core/modules/rdf/rdf.info.yml', 'filename' => 'rdf.module'), 'search' => array('type' => 'module', 'pathname' => 'core/modules/search/search.info.yml', 'filename' => 'search.module'), 'shortcut' => array('type' => 'module', 'pathname' => 'core/modules/shortcut/shortcut.info.yml', 'filename' => 'shortcut.module'), 'standard' => array('type' => 'profile', 'pathname' => 'core/profiles/standard/standard.info.yml', 'filename' => 'standard.profile'), 'system' => array('type' => 'module', 'pathname' => 'core/modules/system/system.info.yml', 'filename' => 'system.module'), 'taxonomy' => array('type' => 'module', 'pathname' => 'core/modules/taxonomy/taxonomy.info.yml', 'filename' => 'taxonomy.module'), 'text' => array('type' => 'module', 'pathname' => 'core/modules/text/text.info.yml', 'filename' => 'text.module'), 'toolbar' => array('type' => 'module', 'pathname' => 'core/modules/toolbar/toolbar.info.yml', 'filename' => 'toolbar.module'), 'tour' => array('type' => 'module', 'pathname' => 'core/modules/tour/tour.info.yml', 'filename' => 'tour.module'), 'user' => array('type' => 'module', 'pathname' => 'core/modules/user/user.info.yml', 'filename' => 'user.module'), 'views_ui' => array('type' => 'module', 'pathname' => 'core/modules/views_ui/views_ui.info.yml', 'filename' => 'views_ui.module'), 'views' => array('type' => 'module', 'pathname' => 'core/modules/views/views.info.yml', 'filename' => 'views.module')), $this->get('cache.bootstrap'));
    }

    /**
     * Gets the 'node.admin_path.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\node\EventSubscriber\NodeAdminRouteSubscriber A Drupal\node\EventSubscriber\NodeAdminRouteSubscriber instance.
     */
    protected function getNode_AdminPath_RouteSubscriberService()
    {
        return $this->services['node.admin_path.route_subscriber'] = new \Drupal\node\EventSubscriber\NodeAdminRouteSubscriber($this->get('config.factory'));
    }

    /**
     * Gets the 'node.grant_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\node\NodeGrantDatabaseStorage A Drupal\node\NodeGrantDatabaseStorage instance.
     */
    protected function getNode_GrantStorageService()
    {
        return $this->services['node.grant_storage'] = new \Drupal\node\NodeGrantDatabaseStorage($this->get('database'), $this->get('module_handler'));
    }

    /**
     * Gets the 'paramconverter.configentity_admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ParamConverter\AdminPathConfigEntityConverter A Drupal\Core\ParamConverter\AdminPathConfigEntityConverter instance.
     */
    protected function getParamconverter_ConfigentityAdminService()
    {
        return $this->services['paramconverter.configentity_admin'] = new \Drupal\Core\ParamConverter\AdminPathConfigEntityConverter($this->get('entity.manager'), $this->get('config.factory'), $this->get('router.admin_context'));
    }

    /**
     * Gets the 'paramconverter.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ParamConverter\EntityConverter A Drupal\Core\ParamConverter\EntityConverter instance.
     */
    protected function getParamconverter_EntityService()
    {
        return $this->services['paramconverter.entity'] = new \Drupal\Core\ParamConverter\EntityConverter($this->get('entity.manager'));
    }

    /**
     * Gets the 'paramconverter.views_ui' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views_ui\ParamConverter\ViewUIConverter A Drupal\views_ui\ParamConverter\ViewUIConverter instance.
     */
    protected function getParamconverter_ViewsUiService()
    {
        return $this->services['paramconverter.views_ui'] = new \Drupal\views_ui\ParamConverter\ViewUIConverter($this->get('entity.manager'), $this->get('user.tempstore'));
    }

    /**
     * Gets the 'paramconverter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ParamConverter\ParamConverterManager A Drupal\Core\ParamConverter\ParamConverterManager instance.
     */
    protected function getParamconverterManagerService()
    {
        $this->services['paramconverter_manager'] = $instance = new \Drupal\Core\ParamConverter\ParamConverterManager();

        $instance->setContainer($this);
        $instance->addConverter('paramconverter.entity', 0);
        $instance->addConverter('paramconverter.configentity_admin', 5);
        $instance->addConverter('paramconverter.views_ui', 10);

        return $instance;
    }

    /**
     * Gets the 'paramconverter_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ParamConverterSubscriber A Drupal\Core\EventSubscriber\ParamConverterSubscriber instance.
     */
    protected function getParamconverterSubscriberService()
    {
        return $this->services['paramconverter_subscriber'] = new \Drupal\Core\EventSubscriber\ParamConverterSubscriber($this->get('paramconverter_manager'));
    }

    /**
     * Gets the 'password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Password\PhpassHashedPassword A Drupal\Core\Password\PhpassHashedPassword instance.
     */
    protected function getPasswordService()
    {
        return $this->services['password'] = new \Drupal\Core\Password\PhpassHashedPassword(16);
    }

    /**
     * Gets the 'path.alias_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Path\AliasManager A Drupal\Core\Path\AliasManager instance.
     */
    protected function getPath_AliasManagerService()
    {
        return $this->services['path.alias_manager'] = new \Drupal\Core\Path\AliasManager($this->get('path.alias_storage'), $this->get('path.alias_whitelist'), $this->get('language_manager'), $this->get('cache.data'));
    }

    /**
     * Gets the 'path.alias_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Path\AliasStorage A Drupal\Core\Path\AliasStorage instance.
     */
    protected function getPath_AliasStorageService()
    {
        return $this->services['path.alias_storage'] = new \Drupal\Core\Path\AliasStorage($this->get('database'), $this->get('module_handler'));
    }

    /**
     * Gets the 'path.alias_whitelist' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Path\AliasWhitelist A Drupal\Core\Path\AliasWhitelist instance.
     */
    protected function getPath_AliasWhitelistService()
    {
        return $this->services['path.alias_whitelist'] = new \Drupal\Core\Path\AliasWhitelist('path_alias_whitelist', $this->get('cache.default'), $this->get('lock'), $this->get('state'), $this->get('path.alias_storage'));
    }

    /**
     * Gets the 'path_processor.files' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\PathProcessor\PathProcessorFiles A Drupal\system\PathProcessor\PathProcessorFiles instance.
     */
    protected function getPathProcessor_FilesService()
    {
        return $this->services['path_processor.files'] = new \Drupal\system\PathProcessor\PathProcessorFiles();
    }

    /**
     * Gets the 'path_processor.image_styles' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\image\PathProcessor\PathProcessorImageStyles A Drupal\image\PathProcessor\PathProcessorImageStyles instance.
     */
    protected function getPathProcessor_ImageStylesService()
    {
        return $this->services['path_processor.image_styles'] = new \Drupal\image\PathProcessor\PathProcessorImageStyles();
    }

    /**
     * Gets the 'path_processor_alias' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorAlias A Drupal\Core\PathProcessor\PathProcessorAlias instance.
     */
    protected function getPathProcessorAliasService()
    {
        return $this->services['path_processor_alias'] = new \Drupal\Core\PathProcessor\PathProcessorAlias($this->get('path.alias_manager'));
    }

    /**
     * Gets the 'path_processor_decode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorDecode A Drupal\Core\PathProcessor\PathProcessorDecode instance.
     */
    protected function getPathProcessorDecodeService()
    {
        return $this->services['path_processor_decode'] = new \Drupal\Core\PathProcessor\PathProcessorDecode();
    }

    /**
     * Gets the 'path_processor_front' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorFront A Drupal\Core\PathProcessor\PathProcessorFront instance.
     */
    protected function getPathProcessorFrontService()
    {
        return $this->services['path_processor_front'] = new \Drupal\Core\PathProcessor\PathProcessorFront($this->get('config.factory'));
    }

    /**
     * Gets the 'path_processor_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorManager A Drupal\Core\PathProcessor\PathProcessorManager instance.
     */
    protected function getPathProcessorManagerService()
    {
        $a = $this->get('path_processor_front');
        $b = $this->get('path_processor_alias');

        $this->services['path_processor_manager'] = $instance = new \Drupal\Core\PathProcessor\PathProcessorManager();

        $instance->addInbound($this->get('path_processor_decode'), 1000);
        $instance->addInbound($this->get('path_processor.image_styles'), 300);
        $instance->addInbound($a, 200);
        $instance->addInbound($this->get('path_processor.files'), 200);
        $instance->addInbound($b, 100);
        $instance->addOutbound($b, 300);
        $instance->addOutbound($a, 200);

        return $instance;
    }

    /**
     * Gets the 'path_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\PathSubscriber A Drupal\Core\EventSubscriber\PathSubscriber instance.
     */
    protected function getPathSubscriberService()
    {
        return $this->services['path_subscriber'] = new \Drupal\Core\EventSubscriber\PathSubscriber($this->get('path.alias_manager'), $this->get('path_processor_manager'));
    }

    /**
     * Gets the 'plugin.cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Plugin\CachedDiscoveryClearer A Drupal\Core\Plugin\CachedDiscoveryClearer instance.
     */
    protected function getPlugin_CacheClearerService()
    {
        $this->services['plugin.cache_clearer'] = $instance = new \Drupal\Core\Plugin\CachedDiscoveryClearer();

        $instance->addCachedDiscovery($this->get('entity.manager'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.field_type'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.widget'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.formatter'));
        $instance->addCachedDiscovery($this->get('plugin.manager.archiver'));
        $instance->addCachedDiscovery($this->get('plugin.manager.action'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.local_action'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.local_task'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.contextual_link'));
        $instance->addCachedDiscovery($this->get('typed_data_manager'));
        $instance->addCachedDiscovery($this->get('plugin.manager.mail'));
        $instance->addCachedDiscovery($this->get('plugin.manager.condition'));
        $instance->addCachedDiscovery($this->get('plugin.manager.block'));
        $instance->addCachedDiscovery($this->get('plugin.manager.ckeditor.plugin'));
        $instance->addCachedDiscovery($this->get('plugin.manager.editor'));
        $instance->addCachedDiscovery($this->get('plugin.manager.entity_reference.selection'));
        $instance->addCachedDiscovery($this->get('plugin.manager.filter'));
        $instance->addCachedDiscovery($this->get('plugin.manager.image.effect'));
        $instance->addCachedDiscovery($this->get('plugin.manager.quickedit.editor'));
        $instance->addCachedDiscovery($this->get('plugin.manager.search'));
        $instance->addCachedDiscovery($this->get('plugin.manager.tour.tip'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.access'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.area'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.argument'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.argument_default'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.argument_validator'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.cache'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.display_extender'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.display'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.exposed_form'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.field'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.filter'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.join'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.pager'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.query'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.relationship'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.row'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.sort'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.style'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.wizard'));

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Action\ActionManager A Drupal\Core\Action\ActionManager instance.
     */
    protected function getPlugin_Manager_ActionService()
    {
        return $this->services['plugin.manager.action'] = new \Drupal\Core\Action\ActionManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.archiver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Archiver\ArchiverManager A Drupal\Core\Archiver\ArchiverManager instance.
     */
    protected function getPlugin_Manager_ArchiverService()
    {
        return $this->services['plugin.manager.archiver'] = new \Drupal\Core\Archiver\ArchiverManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\block\BlockManager A Drupal\block\BlockManager instance.
     */
    protected function getPlugin_Manager_BlockService()
    {
        return $this->services['plugin.manager.block'] = new \Drupal\block\BlockManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'), $this->get('string_translation'));
    }

    /**
     * Gets the 'plugin.manager.ckeditor.plugin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\ckeditor\CKEditorPluginManager A Drupal\ckeditor\CKEditorPluginManager instance.
     */
    protected function getPlugin_Manager_Ckeditor_PluginService()
    {
        return $this->services['plugin.manager.ckeditor.plugin'] = new \Drupal\ckeditor\CKEditorPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.condition' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Condition\ConditionManager A Drupal\Core\Condition\ConditionManager instance.
     */
    protected function getPlugin_Manager_ConditionService()
    {
        return $this->services['plugin.manager.condition'] = new \Drupal\Core\Condition\ConditionManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.editor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\editor\Plugin\EditorManager A Drupal\editor\Plugin\EditorManager instance.
     */
    protected function getPlugin_Manager_EditorService()
    {
        return $this->services['plugin.manager.editor'] = new \Drupal\editor\Plugin\EditorManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.entity_reference.selection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\entity_reference\Plugin\Type\SelectionPluginManager A Drupal\entity_reference\Plugin\Type\SelectionPluginManager instance.
     */
    protected function getPlugin_Manager_EntityReference_SelectionService()
    {
        return $this->services['plugin.manager.entity_reference.selection'] = new \Drupal\entity_reference\Plugin\Type\SelectionPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.field.field_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Field\FieldTypePluginManager A Drupal\Core\Field\FieldTypePluginManager instance.
     */
    protected function getPlugin_Manager_Field_FieldTypeService()
    {
        return $this->services['plugin.manager.field.field_type'] = new \Drupal\Core\Field\FieldTypePluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.field.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Field\FormatterPluginManager A Drupal\Core\Field\FormatterPluginManager instance.
     */
    protected function getPlugin_Manager_Field_FormatterService()
    {
        return $this->services['plugin.manager.field.formatter'] = new \Drupal\Core\Field\FormatterPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('language_manager'), $this->get('plugin.manager.field.field_type'));
    }

    /**
     * Gets the 'plugin.manager.field.widget' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Field\WidgetPluginManager A Drupal\Core\Field\WidgetPluginManager instance.
     */
    protected function getPlugin_Manager_Field_WidgetService()
    {
        return $this->services['plugin.manager.field.widget'] = new \Drupal\Core\Field\WidgetPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('language_manager'), $this->get('plugin.manager.field.field_type'));
    }

    /**
     * Gets the 'plugin.manager.filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\filter\FilterPluginManager A Drupal\filter\FilterPluginManager instance.
     */
    protected function getPlugin_Manager_FilterService()
    {
        return $this->services['plugin.manager.filter'] = new \Drupal\filter\FilterPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.image.effect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\image\ImageEffectManager A Drupal\image\ImageEffectManager instance.
     */
    protected function getPlugin_Manager_Image_EffectService()
    {
        return $this->services['plugin.manager.image.effect'] = new \Drupal\image\ImageEffectManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.mail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Mail\MailManager A Drupal\Core\Mail\MailManager instance.
     */
    protected function getPlugin_Manager_MailService()
    {
        return $this->services['plugin.manager.mail'] = new \Drupal\Core\Mail\MailManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'), $this->get('config.factory'));
    }

    /**
     * Gets the 'plugin.manager.menu.contextual_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Menu\ContextualLinkManager A Drupal\Core\Menu\ContextualLinkManager instance.
     */
    protected function getPlugin_Manager_Menu_ContextualLinkService()
    {
        return $this->services['plugin.manager.menu.contextual_link'] = new \Drupal\Core\Menu\ContextualLinkManager($this->get('controller_resolver'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'), $this->get('request_stack'));
    }

    /**
     * Gets the 'plugin.manager.menu.local_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Menu\LocalActionManager A Drupal\Core\Menu\LocalActionManager instance.
     */
    protected function getPlugin_Manager_Menu_LocalActionService()
    {
        return $this->services['plugin.manager.menu.local_action'] = new \Drupal\Core\Menu\LocalActionManager($this->get('controller_resolver'), $this->get('request_stack'), $this->get('router.route_provider'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'));
    }

    /**
     * Gets the 'plugin.manager.menu.local_task' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Menu\LocalTaskManager A Drupal\Core\Menu\LocalTaskManager instance.
     */
    protected function getPlugin_Manager_Menu_LocalTaskService()
    {
        return $this->services['plugin.manager.menu.local_task'] = new \Drupal\Core\Menu\LocalTaskManager($this->get('controller_resolver'), $this->get('request_stack'), $this->get('router.route_provider'), $this->get('router.builder'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'));
    }

    /**
     * Gets the 'plugin.manager.quickedit.editor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\quickedit\Plugin\InPlaceEditorManager A Drupal\quickedit\Plugin\InPlaceEditorManager instance.
     */
    protected function getPlugin_Manager_Quickedit_EditorService()
    {
        return $this->services['plugin.manager.quickedit.editor'] = new \Drupal\quickedit\Plugin\InPlaceEditorManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\search\SearchPluginManager A Drupal\search\SearchPluginManager instance.
     */
    protected function getPlugin_Manager_SearchService()
    {
        return $this->services['plugin.manager.search'] = new \Drupal\search\SearchPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.tour.tip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\tour\TipPluginManager A Drupal\tour\TipPluginManager instance.
     */
    protected function getPlugin_Manager_Tour_TipService()
    {
        return $this->services['plugin.manager.tour.tip'] = new \Drupal\tour\TipPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.access' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_AccessService()
    {
        return $this->services['plugin.manager.views.access'] = new \Drupal\views\Plugin\ViewsPluginManager('access', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.area' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_AreaService()
    {
        return $this->services['plugin.manager.views.area'] = new \Drupal\views\Plugin\ViewsHandlerManager('area', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.argument' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_ArgumentService()
    {
        return $this->services['plugin.manager.views.argument'] = new \Drupal\views\Plugin\ViewsHandlerManager('argument', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.argument_default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_ArgumentDefaultService()
    {
        return $this->services['plugin.manager.views.argument_default'] = new \Drupal\views\Plugin\ViewsPluginManager('argument_default', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.argument_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_ArgumentValidatorService()
    {
        return $this->services['plugin.manager.views.argument_validator'] = new \Drupal\views\Plugin\ViewsPluginManager('argument_validator', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_CacheService()
    {
        return $this->services['plugin.manager.views.cache'] = new \Drupal\views\Plugin\ViewsPluginManager('cache', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.display' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_DisplayService()
    {
        return $this->services['plugin.manager.views.display'] = new \Drupal\views\Plugin\ViewsPluginManager('display', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.display_extender' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_DisplayExtenderService()
    {
        return $this->services['plugin.manager.views.display_extender'] = new \Drupal\views\Plugin\ViewsPluginManager('display_extender', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.exposed_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_ExposedFormService()
    {
        return $this->services['plugin.manager.views.exposed_form'] = new \Drupal\views\Plugin\ViewsPluginManager('exposed_form', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_FieldService()
    {
        return $this->services['plugin.manager.views.field'] = new \Drupal\views\Plugin\ViewsHandlerManager('field', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_FilterService()
    {
        return $this->services['plugin.manager.views.filter'] = new \Drupal\views\Plugin\ViewsHandlerManager('filter', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.join' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_JoinService()
    {
        return $this->services['plugin.manager.views.join'] = new \Drupal\views\Plugin\ViewsHandlerManager('join', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.pager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_PagerService()
    {
        return $this->services['plugin.manager.views.pager'] = new \Drupal\views\Plugin\ViewsPluginManager('pager', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.query' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_QueryService()
    {
        return $this->services['plugin.manager.views.query'] = new \Drupal\views\Plugin\ViewsPluginManager('query', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.relationship' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_RelationshipService()
    {
        return $this->services['plugin.manager.views.relationship'] = new \Drupal\views\Plugin\ViewsHandlerManager('relationship', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.row' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_RowService()
    {
        return $this->services['plugin.manager.views.row'] = new \Drupal\views\Plugin\ViewsPluginManager('row', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.sort' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_SortService()
    {
        return $this->services['plugin.manager.views.sort'] = new \Drupal\views\Plugin\ViewsHandlerManager('sort', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_StyleService()
    {
        return $this->services['plugin.manager.views.style'] = new \Drupal\views\Plugin\ViewsPluginManager('style', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.wizard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_WizardService()
    {
        return $this->services['plugin.manager.views.wizard'] = new \Drupal\views\Plugin\ViewsPluginManager('wizard', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'private_key' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PrivateKey A Drupal\Core\PrivateKey instance.
     */
    protected function getPrivateKeyService()
    {
        return $this->services['private_key'] = new \Drupal\Core\PrivateKey($this->get('state'));
    }

    /**
     * Gets the 'queue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Queue\QueueFactory A Drupal\Core\Queue\QueueFactory instance.
     */
    protected function getQueueService()
    {
        $this->services['queue'] = $instance = new \Drupal\Core\Queue\QueueFactory($this->get('settings'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'queue.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Queue\QueueDatabaseFactory A Drupal\Core\Queue\QueueDatabaseFactory instance.
     */
    protected function getQueue_DatabaseService()
    {
        return $this->services['queue.database'] = new \Drupal\Core\Queue\QueueDatabaseFactory($this->get('database'));
    }

    /**
     * Gets the 'quickedit.editor.selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\quickedit\EditorSelector A Drupal\quickedit\EditorSelector instance.
     */
    protected function getQuickedit_Editor_SelectorService()
    {
        return $this->services['quickedit.editor.selector'] = new \Drupal\quickedit\EditorSelector($this->get('plugin.manager.quickedit.editor'), $this->get('plugin.manager.field.formatter'));
    }

    /**
     * Gets the 'quickedit.metadata.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\quickedit\MetadataGenerator A Drupal\quickedit\MetadataGenerator instance.
     */
    protected function getQuickedit_Metadata_GeneratorService()
    {
        return $this->services['quickedit.metadata.generator'] = new \Drupal\quickedit\MetadataGenerator($this->get('access_check.quickedit.entity_field'), $this->get('quickedit.editor.selector'), $this->get('plugin.manager.quickedit.editor'));
    }

    /**
     * Gets the 'redirect_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\RedirectResponseSubscriber A Drupal\Core\EventSubscriber\RedirectResponseSubscriber instance.
     * 
     * @throws InactiveScopeException when the 'redirect_response_subscriber' service is requested while the 'request' scope is not active
     */
    protected function getRedirectResponseSubscriberService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('redirect_response_subscriber', 'request');
        }

        return $this->services['redirect_response_subscriber'] = $this->scopedServices['request']['redirect_response_subscriber'] = new \Drupal\Core\EventSubscriber\RedirectResponseSubscriber($this->get('url_generator'));
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getRequestService()
    {
        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_close_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\RequestCloseSubscriber A Drupal\Core\EventSubscriber\RequestCloseSubscriber instance.
     */
    protected function getRequestCloseSubscriberService()
    {
        return $this->services['request_close_subscriber'] = new \Drupal\Core\EventSubscriber\RequestCloseSubscriber($this->get('module_handler'));
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'reverse_proxy_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ReverseProxySubscriber A Drupal\Core\EventSubscriber\ReverseProxySubscriber instance.
     */
    protected function getReverseProxySubscriberService()
    {
        return $this->services['reverse_proxy_subscriber'] = new \Drupal\Core\EventSubscriber\ReverseProxySubscriber($this->get('settings'));
    }

    /**
     * Gets the 'route_content_controller_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ContentControllerSubscriber A Drupal\Core\EventSubscriber\ContentControllerSubscriber instance.
     */
    protected function getRouteContentControllerSubscriberService()
    {
        return $this->services['route_content_controller_subscriber'] = new \Drupal\Core\EventSubscriber\ContentControllerSubscriber($this->get('content_negotiation'));
    }

    /**
     * Gets the 'route_content_form_controller_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ContentFormControllerSubscriber A Drupal\Core\EventSubscriber\ContentFormControllerSubscriber instance.
     */
    protected function getRouteContentFormControllerSubscriberService()
    {
        $this->services['route_content_form_controller_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ContentFormControllerSubscriber($this->get('class_resolver'), $this->get('controller_resolver'), $this->get('form_builder'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'route_enhancer.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\Enhancer\AuthenticationEnhancer A Drupal\Core\Routing\Enhancer\AuthenticationEnhancer instance.
     */
    protected function getRouteEnhancer_AuthenticationService()
    {
        return $this->services['route_enhancer.authentication'] = new \Drupal\Core\Routing\Enhancer\AuthenticationEnhancer($this->get('authentication'), $this->get('current_user'));
    }

    /**
     * Gets the 'route_enhancer.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\Enhancer\EntityRouteEnhancer A Drupal\Core\Entity\Enhancer\EntityRouteEnhancer instance.
     */
    protected function getRouteEnhancer_EntityService()
    {
        return $this->services['route_enhancer.entity'] = new \Drupal\Core\Entity\Enhancer\EntityRouteEnhancer($this->get('controller_resolver'), $this->get('entity.manager'), $this->get('form_builder'));
    }

    /**
     * Gets the 'route_enhancer.param_conversion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\Enhancer\ParamConversionEnhancer A Drupal\Core\Routing\Enhancer\ParamConversionEnhancer instance.
     */
    protected function getRouteEnhancer_ParamConversionService()
    {
        return $this->services['route_enhancer.param_conversion'] = new \Drupal\Core\Routing\Enhancer\ParamConversionEnhancer($this->get('paramconverter_manager'));
    }

    /**
     * Gets the 'route_http_method_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\RouteMethodSubscriber A Drupal\Core\EventSubscriber\RouteMethodSubscriber instance.
     */
    protected function getRouteHttpMethodSubscriberService()
    {
        return $this->services['route_http_method_subscriber'] = new \Drupal\Core\EventSubscriber\RouteMethodSubscriber();
    }

    /**
     * Gets the 'route_processor_csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\RouteProcessorCsrf A Drupal\Core\Access\RouteProcessorCsrf instance.
     */
    protected function getRouteProcessorCsrfService()
    {
        return $this->services['route_processor_csrf'] = new \Drupal\Core\Access\RouteProcessorCsrf($this->get('csrf_token'));
    }

    /**
     * Gets the 'route_processor_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\RouteProcessor\RouteProcessorManager A Drupal\Core\RouteProcessor\RouteProcessorManager instance.
     */
    protected function getRouteProcessorManagerService()
    {
        $this->services['route_processor_manager'] = $instance = new \Drupal\Core\RouteProcessor\RouteProcessorManager();

        $instance->addOutbound($this->get('route_processor_csrf'), 0);

        return $instance;
    }

    /**
     * Gets the 'route_special_attributes_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber A Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber instance.
     */
    protected function getRouteSpecialAttributesSubscriberService()
    {
        return $this->services['route_special_attributes_subscriber'] = new \Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber();
    }

    /**
     * Gets the 'route_subscriber.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber A Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber instance.
     */
    protected function getRouteSubscriber_EntityService()
    {
        return $this->services['route_subscriber.entity'] = new \Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber($this->get('entity.manager'));
    }

    /**
     * Gets the 'route_subscriber.module' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ModuleRouteSubscriber A Drupal\Core\EventSubscriber\ModuleRouteSubscriber instance.
     */
    protected function getRouteSubscriber_ModuleService()
    {
        return $this->services['route_subscriber.module'] = new \Drupal\Core\EventSubscriber\ModuleRouteSubscriber($this->get('module_handler'));
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\ChainRouter A Symfony\Cmf\Component\Routing\ChainRouter instance.
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter();

        $instance->setContext($this->get('router.request_context'));
        $instance->add($this->get('router.dynamic'));

        return $instance;
    }

    /**
     * Gets the 'router.admin_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\AdminContext A Drupal\Core\Routing\AdminContext instance.
     */
    protected function getRouter_AdminContextService()
    {
        return $this->services['router.admin_context'] = new \Drupal\Core\Routing\AdminContext($this->get('request_stack'));
    }

    /**
     * Gets the 'router.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\RouteBuilder A Drupal\Core\Routing\RouteBuilder instance.
     */
    protected function getRouter_BuilderService()
    {
        return $this->services['router.builder'] = new \Drupal\Core\Routing\RouteBuilder($this->get('router.dumper'), $this->get('lock'), $this->get('event_dispatcher'), $this->get('module_handler'), $this->get('controller_resolver'), $this->get('state'));
    }

    /**
     * Gets the 'router.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\MatcherDumper A Drupal\Core\Routing\MatcherDumper instance.
     */
    protected function getRouter_DumperService()
    {
        return $this->services['router.dumper'] = new \Drupal\Core\Routing\MatcherDumper($this->get('database'), $this->get('state'));
    }

    /**
     * Gets the 'router.dynamic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\DynamicRouter A Symfony\Cmf\Component\Routing\DynamicRouter instance.
     */
    protected function getRouter_DynamicService()
    {
        $this->services['router.dynamic'] = $instance = new \Symfony\Cmf\Component\Routing\DynamicRouter($this->get('router.request_context'), $this->get('router.matcher'), $this->get('url_generator'));

        $instance->addRouteEnhancer($this->get('route_enhancer.authentication'), 1000);
        $instance->addRouteEnhancer($this->get('route_enhancer.entity'), 20);
        $instance->addRouteEnhancer($this->get('comment.route_enhancer'), 0);
        $instance->addRouteEnhancer($this->get('route_enhancer.param_conversion'), 0);

        return $instance;
    }

    /**
     * Gets the 'router.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher A Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher instance.
     */
    protected function getRouter_MatcherService()
    {
        $this->services['router.matcher'] = $instance = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher($this->get('router.route_provider'));

        $instance->setFinalMatcher($this->get('router.matcher.final_matcher'));
        $instance->addRouteFilter($this->get('content_type_header_matcher'), 0);
        $instance->addRouteFilter($this->get('accept_header_matcher'), 0);

        return $instance;
    }

    /**
     * Gets the 'router.matcher.final_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\UrlMatcher A Drupal\Core\Routing\UrlMatcher instance.
     */
    protected function getRouter_Matcher_FinalMatcherService()
    {
        return $this->services['router.matcher.final_matcher'] = new \Drupal\Core\Routing\UrlMatcher();
    }

    /**
     * Gets the 'router.path_roots_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\PathRootsSubscriber A Drupal\Core\EventSubscriber\PathRootsSubscriber instance.
     */
    protected function getRouter_PathRootsSubscriberService()
    {
        return $this->services['router.path_roots_subscriber'] = new \Drupal\Core\EventSubscriber\PathRootsSubscriber($this->get('state'));
    }

    /**
     * Gets the 'router.rebuild_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\RouterRebuildSubscriber A Drupal\Core\EventSubscriber\RouterRebuildSubscriber instance.
     */
    protected function getRouter_RebuildSubscriberService()
    {
        return $this->services['router.rebuild_subscriber'] = new \Drupal\Core\EventSubscriber\RouterRebuildSubscriber($this->get('router.builder'), $this->get('lock'));
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext();
    }

    /**
     * Gets the 'router.route_preloader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\RoutePreloader A Drupal\Core\Routing\RoutePreloader instance.
     */
    protected function getRouter_RoutePreloaderService()
    {
        return $this->services['router.route_preloader'] = new \Drupal\Core\Routing\RoutePreloader($this->get('router.route_provider'), $this->get('state'), $this->get('content_negotiation'));
    }

    /**
     * Gets the 'router.route_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\RouteProvider A Drupal\Core\Routing\RouteProvider instance.
     */
    protected function getRouter_RouteProviderService()
    {
        return $this->services['router.route_provider'] = new \Drupal\Core\Routing\RouteProvider($this->get('database'), $this->get('router.builder'), $this->get('state'));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context'), NULL, $this->get('request_stack'));
    }

    /**
     * Gets the 'search.search_page_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\search\SearchPageRepository A Drupal\search\SearchPageRepository instance.
     */
    protected function getSearch_SearchPageRepositoryService()
    {
        return $this->services['search.search_page_repository'] = new \Drupal\search\SearchPageRepository($this->get('config.factory'), $this->get('entity.manager'));
    }

    /**
     * Gets the 'serialization.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Serialization\Json A Drupal\Component\Serialization\Json instance.
     */
    protected function getSerialization_JsonService()
    {
        return $this->services['serialization.json'] = new \Drupal\Component\Serialization\Json();
    }

    /**
     * Gets the 'serialization.phpserialize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Serialization\PhpSerialize A Drupal\Component\Serialization\PhpSerialize instance.
     */
    protected function getSerialization_PhpserializeService()
    {
        return $this->services['serialization.phpserialize'] = new \Drupal\Component\Serialization\PhpSerialize();
    }

    /**
     * Gets the 'serialization.yaml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Serialization\Yaml A Drupal\Component\Serialization\Yaml instance.
     */
    protected function getSerialization_YamlService()
    {
        return $this->services['serialization.yaml'] = new \Drupal\Component\Serialization\Yaml();
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Session\SessionManager A Drupal\Core\Session\SessionManager instance.
     */
    protected function getSessionManagerService()
    {
        return $this->services['session_manager'] = new \Drupal\Core\Session\SessionManager($this->get('request_stack'), $this->get('database'), $this->get('session_manager.metadata_bag'), $this->get('settings'));
    }

    /**
     * Gets the 'session_manager.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Session\MetadataBag A Drupal\Core\Session\MetadataBag instance.
     */
    protected function getSessionManager_MetadataBagService()
    {
        return $this->services['session_manager.metadata_bag'] = new \Drupal\Core\Session\MetadataBag($this->get('settings'));
    }

    /**
     * Gets the 'settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Site\Settings A Drupal\Core\Site\Settings instance.
     */
    protected function getSettingsService()
    {
        return $this->services['settings'] = call_user_func(array('Drupal\\Core\\Site\\Settings', 'getInstance'));
    }

    /**
     * Gets the 'slave_database_ignore__subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\SlaveDatabaseIgnoreSubscriber A Drupal\Core\EventSubscriber\SlaveDatabaseIgnoreSubscriber instance.
     */
    protected function getSlaveDatabaseIgnoreSubscriberService()
    {
        return $this->services['slave_database_ignore__subscriber'] = new \Drupal\Core\EventSubscriber\SlaveDatabaseIgnoreSubscriber();
    }

    /**
     * Gets the 'state' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\State\State A Drupal\Core\State\State instance.
     */
    protected function getStateService()
    {
        return $this->services['state'] = new \Drupal\Core\State\State($this->get('keyvalue'));
    }

    /**
     * Gets the 'string_translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\StringTranslation\TranslationManager A Drupal\Core\StringTranslation\TranslationManager instance.
     */
    protected function getStringTranslationService()
    {
        $this->services['string_translation'] = $instance = new \Drupal\Core\StringTranslation\TranslationManager($this->get('language_manager'));

        $instance->initLanguageManager();
        $instance->addTranslator($this->get('string_translator.custom_strings'), 30);

        return $instance;
    }

    /**
     * Gets the 'string_translator.custom_strings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\StringTranslation\Translator\CustomStrings A Drupal\Core\StringTranslation\Translator\CustomStrings instance.
     */
    protected function getStringTranslator_CustomStringsService()
    {
        return $this->services['string_translator.custom_strings'] = new \Drupal\Core\StringTranslation\Translator\CustomStrings($this->get('settings'));
    }

    /**
     * Gets the 'system.admin_path.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\EventSubscriber\AdminRouteSubscriber A Drupal\system\EventSubscriber\AdminRouteSubscriber instance.
     */
    protected function getSystem_AdminPath_RouteSubscriberService()
    {
        return $this->services['system.admin_path.route_subscriber'] = new \Drupal\system\EventSubscriber\AdminRouteSubscriber();
    }

    /**
     * Gets the 'system.automatic_cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\EventSubscriber\AutomaticCron A Drupal\system\EventSubscriber\AutomaticCron instance.
     */
    protected function getSystem_AutomaticCronService()
    {
        return $this->services['system.automatic_cron'] = new \Drupal\system\EventSubscriber\AutomaticCron($this->get('cron'), $this->get('config.factory'), $this->get('state'));
    }

    /**
     * Gets the 'system.breadcrumb.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\PathBasedBreadcrumbBuilder A Drupal\system\PathBasedBreadcrumbBuilder instance.
     */
    protected function getSystem_Breadcrumb_DefaultService()
    {
        return $this->services['system.breadcrumb.default'] = new \Drupal\system\PathBasedBreadcrumbBuilder($this->get('router.request_context'), $this->get('access_manager'), $this->get('router'), $this->get('path_processor_manager'), $this->get('config.factory'), $this->get('title_resolver'), $this->get('current_user'));
    }

    /**
     * Gets the 'system.config_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\SystemConfigSubscriber A Drupal\system\SystemConfigSubscriber instance.
     */
    protected function getSystem_ConfigSubscriberService()
    {
        return $this->services['system.config_subscriber'] = new \Drupal\system\SystemConfigSubscriber();
    }

    /**
     * Gets the 'system.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\SystemManager A Drupal\system\SystemManager instance.
     */
    protected function getSystem_ManagerService()
    {
        return $this->services['system.manager'] = new \Drupal\system\SystemManager($this->get('module_handler'), $this->get('database'), $this->get('entity.manager'), $this->get('request_stack'));
    }

    /**
     * Gets the 'taxonomy_term.breadcrumb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\taxonomy\TermBreadcrumbBuilder A Drupal\taxonomy\TermBreadcrumbBuilder instance.
     */
    protected function getTaxonomyTerm_BreadcrumbService()
    {
        return $this->services['taxonomy_term.breadcrumb'] = new \Drupal\taxonomy\TermBreadcrumbBuilder();
    }

    /**
     * Gets the 'theme.negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Theme\ThemeNegotiator A Drupal\Core\Theme\ThemeNegotiator instance.
     */
    protected function getTheme_NegotiatorService()
    {
        $this->services['theme.negotiator'] = $instance = new \Drupal\Core\Theme\ThemeNegotiator($this->get('access_check.theme'), $this->get('request_stack'));

        $instance->addNegotiator($this->get('theme.negotiator.system.batch'), 1000);
        $instance->addNegotiator($this->get('theme.negotiator.block.admin_demo'), 1000);
        $instance->addNegotiator($this->get('theme.negotiator.ajax_base_page'), 1000);
        $instance->addNegotiator($this->get('theme.negotiator.admin_theme'), -40);
        $instance->addNegotiator($this->get('theme.negotiator.default'), -100);

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.admin_theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\Theme\AdminNegotiator A Drupal\user\Theme\AdminNegotiator instance.
     */
    protected function getTheme_Negotiator_AdminThemeService()
    {
        return $this->services['theme.negotiator.admin_theme'] = new \Drupal\user\Theme\AdminNegotiator($this->get('current_user'), $this->get('config.factory'), $this->get('entity.manager'), $this->get('router.admin_context'));
    }

    /**
     * Gets the 'theme.negotiator.ajax_base_page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Theme\AjaxBasePageNegotiator A Drupal\Core\Theme\AjaxBasePageNegotiator instance.
     */
    protected function getTheme_Negotiator_AjaxBasePageService()
    {
        return $this->services['theme.negotiator.ajax_base_page'] = new \Drupal\Core\Theme\AjaxBasePageNegotiator($this->get('csrf_token'), $this->get('config.factory'));
    }

    /**
     * Gets the 'theme.negotiator.block.admin_demo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\block\Theme\AdminDemoNegotiator A Drupal\block\Theme\AdminDemoNegotiator instance.
     */
    protected function getTheme_Negotiator_Block_AdminDemoService()
    {
        return $this->services['theme.negotiator.block.admin_demo'] = new \Drupal\block\Theme\AdminDemoNegotiator();
    }

    /**
     * Gets the 'theme.negotiator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Theme\DefaultNegotiator A Drupal\Core\Theme\DefaultNegotiator instance.
     */
    protected function getTheme_Negotiator_DefaultService()
    {
        return $this->services['theme.negotiator.default'] = new \Drupal\Core\Theme\DefaultNegotiator($this->get('config.factory'));
    }

    /**
     * Gets the 'theme.negotiator.system.batch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\Theme\BatchNegotiator A Drupal\system\Theme\BatchNegotiator instance.
     */
    protected function getTheme_Negotiator_System_BatchService()
    {
        return $this->services['theme.negotiator.system.batch'] = new \Drupal\system\Theme\BatchNegotiator($this->get('batch.storage'));
    }

    /**
     * Gets the 'theme.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Theme\Registry A Drupal\Core\Theme\Registry instance.
     */
    protected function getTheme_RegistryService()
    {
        return $this->services['theme.registry'] = new \Drupal\Core\Theme\Registry($this->get('cache.default'), $this->get('lock'), $this->get('module_handler'));
    }

    /**
     * Gets the 'theme_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Extension\ThemeHandler A Drupal\Core\Extension\ThemeHandler instance.
     */
    protected function getThemeHandlerService()
    {
        return $this->services['theme_handler'] = new \Drupal\Core\Extension\ThemeHandler($this->get('config.factory'), $this->get('module_handler'), $this->get('state'), $this->get('info_parser'), $this->get('config.installer'), $this->get('router.builder'));
    }

    /**
     * Gets the 'title_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\TitleResolver A Drupal\Core\Controller\TitleResolver instance.
     */
    protected function getTitleResolverService()
    {
        return $this->services['title_resolver'] = new \Drupal\Core\Controller\TitleResolver($this->get('controller_resolver'), $this->get('string_translation'));
    }

    /**
     * Gets the 'token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Utility\Token A Drupal\Core\Utility\Token instance.
     */
    protected function getTokenService()
    {
        return $this->services['token'] = new \Drupal\Core\Utility\Token($this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'));
    }

    /**
     * Gets the 'transliteration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Transliteration\PHPTransliteration A Drupal\Core\Transliteration\PHPTransliteration instance.
     */
    protected function getTransliterationService()
    {
        return $this->services['transliteration'] = new \Drupal\Core\Transliteration\PHPTransliteration();
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Template\TwigEnvironment A Drupal\Core\Template\TwigEnvironment instance.
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Drupal\Core\Template\TwigEnvironment($this->get('twig.loader.filesystem'), array('cache' => true, 'autoescape' => false, 'debug' => false, 'auto_reload' => NULL), $this->get('module_handler'), $this->get('theme_handler'));

        $instance->addExtension(new \Drupal\Core\Template\TwigExtension());
        $instance->addExtension(new \Twig_Extension_Debug());

        return $instance;
    }

    /**
     * Gets the 'twig.loader.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Loader_Filesystem A Twig_Loader_Filesystem instance.
     */
    protected function getTwig_Loader_FilesystemService()
    {
        return $this->services['twig.loader.filesystem'] = new \Twig_Loader_Filesystem('/Applications/MAMP/htdocs/drupal8');
    }

    /**
     * Gets the 'typed_data_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\TypedData\TypedDataManager A Drupal\Core\TypedData\TypedDataManager instance.
     */
    protected function getTypedDataManagerService()
    {
        $this->services['typed_data_manager'] = $instance = new \Drupal\Core\TypedData\TypedDataManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));

        $instance->setValidationConstraintManager($this->get('validation.constraint'));

        return $instance;
    }

    /**
     * Gets the 'url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\UrlGenerator A Drupal\Core\Routing\UrlGenerator instance.
     */
    protected function getUrlGeneratorService()
    {
        $this->services['url_generator'] = $instance = new \Drupal\Core\Routing\UrlGenerator($this->get('router.route_provider'), $this->get('path_processor_manager'), $this->get('route_processor_manager'), $this->get('config.factory'), $this->get('settings'), $this->get('logger.channel.default'));

        if ($this->has('request')) {
            $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('router.request_context')) {
            $instance->setContext($this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'user.auth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\UserAuth A Drupal\user\UserAuth instance.
     */
    protected function getUser_AuthService()
    {
        return $this->services['user.auth'] = new \Drupal\user\UserAuth($this->get('entity.manager'), $this->get('password'));
    }

    /**
     * Gets the 'user.autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\UserAutocomplete A Drupal\user\UserAutocomplete instance.
     */
    protected function getUser_AutocompleteService()
    {
        return $this->services['user.autocomplete'] = new \Drupal\user\UserAutocomplete($this->get('database'), $this->get('config.factory'), $this->get('entity.manager'), $this->get('entity.query'));
    }

    /**
     * Gets the 'user.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\UserData A Drupal\user\UserData instance.
     */
    protected function getUser_DataService()
    {
        return $this->services['user.data'] = new \Drupal\user\UserData($this->get('database'));
    }

    /**
     * Gets the 'user.permissions_hash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\PermissionsHash A Drupal\user\PermissionsHash instance.
     */
    protected function getUser_PermissionsHashService()
    {
        return $this->services['user.permissions_hash'] = new \Drupal\user\PermissionsHash($this->get('private_key'), $this->get('cache.default'));
    }

    /**
     * Gets the 'user.tempstore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\TempStoreFactory A Drupal\user\TempStoreFactory instance.
     */
    protected function getUser_TempstoreService()
    {
        return $this->services['user.tempstore'] = new \Drupal\user\TempStoreFactory($this->get('serialization.phpserialize'), $this->get('database'), $this->get('lock'));
    }

    /**
     * Gets the 'user_maintenance_mode_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\EventSubscriber\MaintenanceModeSubscriber A Drupal\user\EventSubscriber\MaintenanceModeSubscriber instance.
     */
    protected function getUserMaintenanceModeSubscriberService()
    {
        return $this->services['user_maintenance_mode_subscriber'] = new \Drupal\user\EventSubscriber\MaintenanceModeSubscriber();
    }

    /**
     * Gets the 'uuid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Uuid\Php A Drupal\Component\Uuid\Php instance.
     */
    protected function getUuidService()
    {
        return $this->services['uuid'] = new \Drupal\Component\Uuid\Php();
    }

    /**
     * Gets the 'validation.constraint' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Validation\ConstraintManager A Drupal\Core\Validation\ConstraintManager instance.
     */
    protected function getValidation_ConstraintService()
    {
        return $this->services['validation.constraint'] = new \Drupal\Core\Validation\ConstraintManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'view_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ViewSubscriber A Drupal\Core\EventSubscriber\ViewSubscriber instance.
     */
    protected function getViewSubscriberService()
    {
        return $this->services['view_subscriber'] = new \Drupal\Core\EventSubscriber\ViewSubscriber($this->get('content_negotiation'), $this->get('title_resolver'), $this->get('ajax_response_renderer'));
    }

    /**
     * Gets the 'views.analyzer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Analyzer A Drupal\views\Analyzer instance.
     */
    protected function getViews_AnalyzerService()
    {
        return $this->services['views.analyzer'] = new \Drupal\views\Analyzer($this->get('module_handler'));
    }

    /**
     * Gets the 'views.executable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\ViewExecutableFactory A Drupal\views\ViewExecutableFactory instance.
     */
    protected function getViews_ExecutableService()
    {
        return $this->services['views.executable'] = new \Drupal\views\ViewExecutableFactory($this->get('current_user'), $this->get('request_stack'));
    }

    /**
     * Gets the 'views.exposed_form_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\ExposedFormCache A Drupal\views\ExposedFormCache instance.
     */
    protected function getViews_ExposedFormCacheService()
    {
        return $this->services['views.exposed_form_cache'] = new \Drupal\views\ExposedFormCache();
    }

    /**
     * Gets the 'views.route_access_check' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\ViewsAccessCheck A Drupal\views\ViewsAccessCheck instance.
     */
    protected function getViews_RouteAccessCheckService()
    {
        return $this->services['views.route_access_check'] = new \Drupal\views\ViewsAccessCheck();
    }

    /**
     * Gets the 'views.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\EventSubscriber\RouteSubscriber A Drupal\views\EventSubscriber\RouteSubscriber instance.
     */
    protected function getViews_RouteSubscriberService()
    {
        return $this->services['views.route_subscriber'] = new \Drupal\views\EventSubscriber\RouteSubscriber($this->get('entity.manager'), $this->get('state'));
    }

    /**
     * Gets the 'views.views_data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\ViewsData A Drupal\views\ViewsData instance.
     */
    protected function getViews_ViewsDataService()
    {
        return $this->services['views.views_data'] = new \Drupal\views\ViewsData($this->get('cache.discovery'), $this->get('config.factory'), $this->get('module_handler'), $this->get('language_manager'));
    }

    /**
     * Gets the 'views.views_data_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\ViewsDataHelper A Drupal\views\ViewsDataHelper instance.
     */
    protected function getViews_ViewsDataHelperService()
    {
        return $this->services['views.views_data_helper'] = new \Drupal\views\ViewsDataHelper($this->get('views.views_data'));
    }

    /**
     * Updates the 'request' service.
     */
    protected function synchronizeRequestService()
    {
        if ($this->initialized('url_generator')) {
                    if ($this->has('request')) {
    $this->get('url_generator')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));        }

        }
        if ($this->initialized('access_manager')) {
                    if ($this->has('request')) {
    $this->get('access_manager')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));        }

        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'prod',
            'container.modules' => array(
                'block' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/block/block.info.yml',
                    'filename' => 'block.module',
                ),
                'breakpoint' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/breakpoint/breakpoint.info.yml',
                    'filename' => 'breakpoint.module',
                ),
                'ckeditor' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/ckeditor/ckeditor.info.yml',
                    'filename' => 'ckeditor.module',
                ),
                'color' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/color/color.info.yml',
                    'filename' => 'color.module',
                ),
                'comment' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/comment/comment.info.yml',
                    'filename' => 'comment.module',
                ),
                'config' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/config/config.info.yml',
                    'filename' => 'config.module',
                ),
                'contact' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/contact/contact.info.yml',
                    'filename' => 'contact.module',
                ),
                'contextual' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/contextual/contextual.info.yml',
                    'filename' => 'contextual.module',
                ),
                'custom_block' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/block/custom_block/custom_block.info.yml',
                    'filename' => 'custom_block.module',
                ),
                'datetime' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/datetime/datetime.info.yml',
                    'filename' => 'datetime.module',
                ),
                'dblog' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/dblog/dblog.info.yml',
                    'filename' => 'dblog.module',
                ),
                'editor' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/editor/editor.info.yml',
                    'filename' => 'editor.module',
                ),
                'entity' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/entity/entity.info.yml',
                    'filename' => 'entity.module',
                ),
                'entity_reference' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/entity_reference/entity_reference.info.yml',
                    'filename' => 'entity_reference.module',
                ),
                'field' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/field/field.info.yml',
                    'filename' => 'field.module',
                ),
                'field_ui' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/field_ui/field_ui.info.yml',
                    'filename' => 'field_ui.module',
                ),
                'file' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/file/file.info.yml',
                    'filename' => 'file.module',
                ),
                'filter' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/filter/filter.info.yml',
                    'filename' => 'filter.module',
                ),
                'help' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/help/help.info.yml',
                    'filename' => 'help.module',
                ),
                'history' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/history/history.info.yml',
                    'filename' => 'history.module',
                ),
                'image' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/image/image.info.yml',
                    'filename' => 'image.module',
                ),
                'menu_link' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/menu_link/menu_link.info.yml',
                    'filename' => 'menu_link.module',
                ),
                'menu_ui' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/menu_ui/menu_ui.info.yml',
                    'filename' => 'menu_ui.module',
                ),
                'node' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/node/node.info.yml',
                    'filename' => 'node.module',
                ),
                'options' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/options/options.info.yml',
                    'filename' => 'options.module',
                ),
                'path' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/path/path.info.yml',
                    'filename' => 'path.module',
                ),
                'quickedit' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/quickedit/quickedit.info.yml',
                    'filename' => 'quickedit.module',
                ),
                'rdf' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/rdf/rdf.info.yml',
                    'filename' => 'rdf.module',
                ),
                'search' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/search/search.info.yml',
                    'filename' => 'search.module',
                ),
                'shortcut' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/shortcut/shortcut.info.yml',
                    'filename' => 'shortcut.module',
                ),
                'standard' => array(
                    'type' => 'profile',
                    'pathname' => 'core/profiles/standard/standard.info.yml',
                    'filename' => 'standard.profile',
                ),
                'system' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/system/system.info.yml',
                    'filename' => 'system.module',
                ),
                'taxonomy' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/taxonomy/taxonomy.info.yml',
                    'filename' => 'taxonomy.module',
                ),
                'text' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/text/text.info.yml',
                    'filename' => 'text.module',
                ),
                'toolbar' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/toolbar/toolbar.info.yml',
                    'filename' => 'toolbar.module',
                ),
                'tour' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/tour/tour.info.yml',
                    'filename' => 'tour.module',
                ),
                'user' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/user/user.info.yml',
                    'filename' => 'user.module',
                ),
                'views_ui' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/views_ui/views_ui.info.yml',
                    'filename' => 'views_ui.module',
                ),
                'views' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/views/views.info.yml',
                    'filename' => 'views.module',
                ),
            ),
            'container.namespaces' => array(
                'Drupal\\block' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/block/lib/Drupal/block',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/block/src',
                ),
                'Drupal\\breakpoint' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/breakpoint/lib/Drupal/breakpoint',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/breakpoint/src',
                ),
                'Drupal\\ckeditor' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/ckeditor/lib/Drupal/ckeditor',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/ckeditor/src',
                ),
                'Drupal\\color' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/color/lib/Drupal/color',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/color/src',
                ),
                'Drupal\\comment' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/comment/lib/Drupal/comment',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/comment/src',
                ),
                'Drupal\\config' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/config/lib/Drupal/config',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/config/src',
                ),
                'Drupal\\contact' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/contact/lib/Drupal/contact',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/contact/src',
                ),
                'Drupal\\contextual' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/contextual/lib/Drupal/contextual',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/contextual/src',
                ),
                'Drupal\\custom_block' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/block/custom_block/lib/Drupal/custom_block',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/block/custom_block/src',
                ),
                'Drupal\\datetime' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/datetime/lib/Drupal/datetime',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/datetime/src',
                ),
                'Drupal\\dblog' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/dblog/lib/Drupal/dblog',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/dblog/src',
                ),
                'Drupal\\editor' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/editor/lib/Drupal/editor',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/editor/src',
                ),
                'Drupal\\entity' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/entity/lib/Drupal/entity',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/entity/src',
                ),
                'Drupal\\entity_reference' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/entity_reference/lib/Drupal/entity_reference',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/entity_reference/src',
                ),
                'Drupal\\field' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/field/lib/Drupal/field',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/field/src',
                ),
                'Drupal\\field_ui' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/field_ui/lib/Drupal/field_ui',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/field_ui/src',
                ),
                'Drupal\\file' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/file/lib/Drupal/file',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/file/src',
                ),
                'Drupal\\filter' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/filter/lib/Drupal/filter',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/filter/src',
                ),
                'Drupal\\help' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/help/lib/Drupal/help',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/help/src',
                ),
                'Drupal\\history' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/history/lib/Drupal/history',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/history/src',
                ),
                'Drupal\\image' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/image/lib/Drupal/image',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/image/src',
                ),
                'Drupal\\menu_link' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/menu_link/lib/Drupal/menu_link',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/menu_link/src',
                ),
                'Drupal\\menu_ui' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/menu_ui/lib/Drupal/menu_ui',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/menu_ui/src',
                ),
                'Drupal\\node' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/node/lib/Drupal/node',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/node/src',
                ),
                'Drupal\\options' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/options/lib/Drupal/options',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/options/src',
                ),
                'Drupal\\path' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/path/lib/Drupal/path',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/path/src',
                ),
                'Drupal\\quickedit' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/quickedit/lib/Drupal/quickedit',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/quickedit/src',
                ),
                'Drupal\\rdf' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/rdf/lib/Drupal/rdf',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/rdf/src',
                ),
                'Drupal\\search' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/search/lib/Drupal/search',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/search/src',
                ),
                'Drupal\\shortcut' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/shortcut/lib/Drupal/shortcut',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/shortcut/src',
                ),
                'Drupal\\standard' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/profiles/standard/lib/Drupal/standard',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/profiles/standard/src',
                ),
                'Drupal\\system' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/system/lib/Drupal/system',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/system/src',
                ),
                'Drupal\\taxonomy' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/taxonomy/lib/Drupal/taxonomy',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/taxonomy/src',
                ),
                'Drupal\\text' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/text/lib/Drupal/text',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/text/src',
                ),
                'Drupal\\toolbar' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/toolbar/lib/Drupal/toolbar',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/toolbar/src',
                ),
                'Drupal\\tour' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/tour/lib/Drupal/tour',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/tour/src',
                ),
                'Drupal\\user' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/user/lib/Drupal/user',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/user/src',
                ),
                'Drupal\\views_ui' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/views_ui/lib/Drupal/views_ui',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/views_ui/src',
                ),
                'Drupal\\views' => array(
                    0 => '/Applications/MAMP/htdocs/drupal8/core/modules/views/lib/Drupal/views',
                    1 => '/Applications/MAMP/htdocs/drupal8/core/modules/views/src',
                ),
                'Drupal\\Core\\Entity' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Core/Entity',
                'Drupal\\Core\\Field' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Core/Field',
                'Drupal\\Core\\Mail' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Core/Mail',
                'Drupal\\Core\\TypedData' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Core/TypedData',
                'Drupal\\Core\\Validation' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Core/Validation',
                'Drupal\\Component\\Annotation' => '/Applications/MAMP/htdocs/drupal8/core/lib/Drupal/Component/Annotation',
            ),
            'language.default_values' => array(
                'id' => 'en',
                'name' => 'English',
                'direction' => 0,
                'weight' => 0,
                'locked' => 0,
                'default' => true,
            ),
            'persistids' => array(
                0 => 'class_loader',
                1 => 'kernel',
                2 => 'service_container',
                3 => 'container.namespaces',
                4 => 'request',
                5 => 'request_stack',
                6 => 'router.request_context',
                7 => 'session_manager',
            ),
            'cache_bins' => array(
                'cache.bootstrap' => 'bootstrap',
                'cache.default' => 'default',
                'cache.entity' => 'entity',
                'cache.render' => 'render',
                'cache.data' => 'data',
                'cache.discovery' => 'discovery',
                'cache.filter' => 'filter',
                'cache.toolbar' => 'toolbar',
            ),
            'cache_contexts' => array(
                0 => 'cache_context.url',
                1 => 'cache_context.language',
                2 => 'cache_context.theme',
                3 => 'cache_context.user',
                4 => 'cache_context.user.roles',
            ),
        );
    }
}

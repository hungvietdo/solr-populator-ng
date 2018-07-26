<?php

namespace TraderInteractive\SolrPopulator;

/**
 * Represents a single ad in a Solr core. This is just a plain data object
 * which holds fields that have their matching Solr field name.
 */
class SolrAdRecord
{
    /**
     * @var string
     */
    public $REALM_ID;

    /**
     * @var string
     */
    public $AD_ID;

    /**
     * @var string
     */
    public $NEW_USED_FLAG;

    /**
     * @var string
     */
    public $DEALER_ID;

    /**
     * @var string
     */
    public $DEALER_GROUP_ID;

    /**
     * @var array
     */
    public $DEALER_GROUP_DEALERS;
}

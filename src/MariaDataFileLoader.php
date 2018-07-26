<?php

namespace TraderInteractive\SolrPopulator;

class MariaDataFileLoader implements RawAdRecordLoaderInterface
{
    /**
     * @var array
     */
    private $fileStreams;

    public function __construct(array $fileStreams)
    {
        $this->fileStreams = $fileStreams;
    }

    public function getMappedAdRecords() : array
    {
        $rawAdRecords = array_map(
            function ($fileStream) {
                return $fileStream->getContents();
            },
            $this->fileStreams
        );

        $mappedRecords = array_map([$this, 'extractDataFields'], $rawAdRecords);
        return $mappedRecords;
    }

    private function extractDataFields(string $rawAdData) : array
    {
        $dataSplit = explode('|||', $rawAdData);
        $mappedData = [];

        foreach ($dataSplit as $index => $value) {
            $mappedData[self::FIELD_INDEX_MAP[$index]] = $value;
        }

        return $mappedData;
    }

    public const FIELD_INDEX_MAP = [
        'REALM_ID',
        'AD_ID',
        'NEW_USED_FLAG',
        'DEALER_ID',
        'YEAR',
        'CLASS_ID',
        'CLASS_NAME',
        'MAKE_ID',
        'MAKE_NAME',
        'MODEL_ID',
        'MODEL_NAME',
        'TRIM_ID',
        'TRIM_NAME',
        'PRICE',
        'CITY',
        'REGION_CODE',
        'STATE_CODE',
        'COUNTRY_CODE',
        'ZIP_CODE',
        'PHONE',
        'PHOTO_COUNT',
        'PHOTO_STATUS',
        'SOURCE_CODE',
        'SCHEME_CODE',
        'LAST_UPDATE',
        'AD_EXPIRE_DATE',
        'WEBSITE_URL',
        'THUMBNAIL_PATH',
        'PAID_AD',
        'VIDEO_COUNT',
        'BROCHURE_COUNT',
        'CUSTOMER_ID',
        'CUSTOMER_EMAIL',
        'STOCK_NUMBER',
        'LATITUDE',
        'LONGITUDE',
        'N_1',
        'N_2',
        'N_3',
        'N_4',
        'N_5',
        'N_6',
        'N_7',
        'N_8',
        'N_9',
        'VC_1',
        'VC_2',
        'VC_3',
        'VC_4',
        'VC_5',
        'VC_6',
        'VC_7',
        'VC_8',
        'VC_9',
        'DESCRIPTION',
        'MFR_SERIAL_NUM',
        'WHOLESALE_FLAG',
        'RECONCILED_MAKE',
        'RECONCILED_MODEL',
        'RECONCILE_SCORE',
        'LONG_TEXT_1',
        'LONG_TEXT_2',
        'LONG_TEXT_3',
        'LONG_TEXT_4',
        'LONG_TEXT_5',
        'LONG_TEXT_6',
        'LONG_TEXT_7',
        'LONG_TEXT_8',
        'LONG_TEXT_9',
        'LONG_TEXT_10',
        'LONG_TEXT_11',
        'LONG_TEXT_12',
        'SHORT_TEXT_1',
        'SHORT_TEXT_2',
        'SHORT_TEXT_3',
        'SHORT_TEXT_4',
        'SHORT_TEXT_5',
        'SHORT_TEXT_6',
        'SHORT_TEXT_7',
        'SHORT_TEXT_8',
        'SHORT_TEXT_9',
        'SHORT_TEXT_10',
        'SHORT_TEXT_11',
        'SHORT_TEXT_12',
        'SHORT_TEXT_13',
        'SHORT_TEXT_14',
        'WHOLESALE_PRICE',
        'WHOLESALE_DESCRIPTION',
        'AREA_CODE',
        'AD_VIDEO',
        'CATEGORY',
        'JOB',
        'OPTION',
        'AFA',
        'AD_FEATURE',
        'PHOTO',
        'COMPANY_NAME',
        'DEALER_ADDRESS_1',
        'DEALER_ADDRESS_2',
        'DEALER_CITY',
        'DEALER_STATE_CODE',
        'DEALER_ZIP_CODE',
        'DEALER_COUNTRY_CODE',
        'DEALER_AREA_CODE',
        'DEALER_EMAIL_ADDR1',
        'DEALER_EMAIL_ADDR2',
        'DEALER_REPEAT_TAG',
        'DEALER_WEBSITE_URL',
        'DEALER_LOGO',
        'DEALER_COOP_LOGO',
        'BROCHURE',
        'DFA',
        'DEALER_FEATURE',
        'DEALER_VIDEO',
        'MANUFACTURER_VIDEO',
        'DFT_FEATURE_ID',
        'DFT_ZIP_CODE',
        'DFT_LATITUDE',
        'DFT_LONGITUDE',
        'DFT_RADIUS',
        'DFT_MAKE_ID',
        'DFT_MODEL_ID',
        'DFT_CAT_ID',
        'DEALER_PHONE',
        'CREATE_DATE',
        'DEALER_COOP_FILTERS',
        'MASTER_CLASS_ID',
        'UPFIT_ID',
        'UPFIT_MONGODB_ID',
        'UPFIT_SERIAL_NUMBER',
        'UPFIT_DESCRIPTION',
        'UPFIT_PRICE',
        'INCENTIVE_DISPLAY_ORDER',
        'DEALER_LAT',
        'DEALER_LON',
        'DEALER_DESCRIPTION',
        'DEALER_PROGRAM_ID',
        'DEALER_GALLERY_SETTINGS',
        'DEALER_ACTIVE_AD_COUNT',
        'DEALER_GROUP_GALLERY_SETTINGS',
        'MSRP',
        'REBATE',
        'DEALER_GROUP_NAME',
        'DEALER_GROUP_WEBSITE',
        'DEALER_GROUP_LOGO_MEDIA_ID',
        'DEALER_GROUP_DEALERS',
    ];
}

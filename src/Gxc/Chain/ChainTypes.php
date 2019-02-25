<?php
/**
 * Created by PhpStorm.
 * User=> kilmas
 * Date=> 2019/1/31
 * Time=> 0=>55
 */

namespace Kilmas\GxcRpc\Gxc\Chain;

class ChainTypes
{

    public static $reserved_spaces = [
        'relative_protocol_ids' => 0,
        'protocol_ids' => 1,
        'implementation_ids' => 2
    ];
    public static $object_type = [
        'null' => 0,
        'base' => 1,
        'account' => 2,
        'asset' => 3,
        'force_settlement' => 4,
        'committee_member' => 5,
        'witness' => 6,
        'limit_order' => 7,
        'call_order' => 8,
        'custom' => 9,
        'proposal' => 10,
        'operation_history' => 11,
        'withdraw_permission' => 12,
        'vesting_balance' => 13,
        'worker' => 14,
        'balance' => 15,
        'data_market_category' => 16,
        'free_data_product' => 17,
        'league_data_product' => 18,
        'league' => 19,
        'data_transaction' => 20,
        'pocs' => 21,
        'datasource_copyright' => 22,
        'second_hand_data' => 23,
        'data_transaction_complain' => 24,
        'lock_balance' => 25
    ];
    public static $impl_object_type = [
        'global_property' => 0,
        'dynamic_global_property' => 1,
        'index_meta' => 2,
        'asset_dynamic_data' => 3,
        'asset_bitasset_data' => 4,
        'account_balance' => 5,
        'account_statistics' => 6,
        'transaction' => 7,
        'block_summary' => 8,
        'account_transaction_history' => 9,
        'blinded_balance' => 10,
        'chain_property' => 11,
        'witness_schedule' => 12,
        'budget_record' => 13
    ];
    public static $vote_type = [
        'committee' => 0,
        'witness' => 1,
        'worker' => 2
    ];

    public static $operations = [
        'transfer' => 0,
        'limit_order_create' => 1,
        'limit_order_cancel' => 2,
        'call_order_update' => 3,
        'fill_order' => 4,
        'account_create' => 5,
        'account_update' => 6,
        'account_whitelist' => 7,
        'account_upgrade' => 8,
        'account_transfer' => 9,
        'asset_create' => 10,
        'asset_update' => 11,
        'asset_update_bitasset' => 12,
        'asset_update_feed_producers' => 13,
        'asset_issue' => 14,
        'asset_reserve' => 15,
        'asset_fund_fee_pool' => 16,
        'asset_settle' => 17,
        'asset_global_settle' => 18,
        'asset_publish_feed' => 19,
        'witness_create' => 20,
        'witness_update' => 21,
        'proposal_create' => 22,
        'proposal_update' => 23,
        'proposal_delete' => 24,
        'withdraw_permission_create' => 25,
        'withdraw_permission_update' => 26,
        'withdraw_permission_claim' => 27,
        'withdraw_permission_delete' => 28,
        'committee_member_create' => 29,
        'committee_member_update' => 30,
        'committee_member_update_global_parameters' => 31,
        'vesting_balance_create' => 32,
        'vesting_balance_withdraw' => 33,
        'worker_create' => 34,
        'custom' => 35,
        'assert' => 36,
        'balance_claim' => 37,
        'override_transfer' => 38,
        'transfer_to_blind' => 39,
        'blind_transfer' => 40,
        'transfer_from_blind' => 41,
        'asset_settle_cancel' => 42,
        'asset_claim_fees' => 43,
        'fba_distribute' => 44,
        'account_upgrade_merchant' => 45,
        'account_upgrade_datasource' => 46,
        'stale_data_market_category_create' => 47,
        'stale_data_market_category_update' => 48,
        'stale_free_data_product_create' => 49,
        'stale_free_data_product_update' => 50,
        'stale_league_data_product_create' => 51,
        'stale_league_data_product_update' => 52,
        'stale_league_create' => 53,
        'stale_league_update' => 54,
        'data_transaction_create' => 55,
        'data_transaction_update' => 56,
        'data_transaction_pay' => 57,
        'account_upgrade_data_transaction_member' => 58,
        'data_transaction_datasource_upload' => 59,
        'data_transaction_datasource_validate_error' => 60,
        'data_market_category_create' => 61,
        'data_market_category_update' => 62,
        'free_data_product_create' => 63,
        'free_data_product_update' => 64,
        'league_data_product_create' => 65,
        'league_data_product_update' => 66,
        'league_create' => 67,
        'league_update' => 68,
        'datasource_copyright_clear' => 69,
        'data_transaction_complain' => 70,
        'balance_lock' => 71,
        'balance_unlock' => 72,
        'proxy_transfer' => 73,
        'create_contract' => 74,
        'call_contract' => 75,
        'update_contract' => 76
    ];
}
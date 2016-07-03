<?php

interface APIGrapheneWallet
{
	/*
	 * Returns the balance of each asset owned by $account.
	 *
	 * @param string $account
	 *
	 * @return array Returns a multidimensional array of the balances.
	 */
	public function returnBalance($account)


	/*
	 * Returns the $account history for $limit transactions.
	 *
	 * @param string $account
	 * @param int $limit The number of transactions you want from the history.
	 *
	 * @return array Returns a multidimensional array of the transactions information.
	 */
	public function returnAccountHistory($account, $limit = 25)


	/**
	 * Returns the name of an $account_id.
	 *
	 * @param string $account_id The account you want to find the name by the account id (1.2 format).
	 *
	 * @return string Returns the account name.
	 */
	public function getAccountByID($account_id)
}

<?php declare(strict_types=1);

namespace legacy;

final class TransactionGate
{
    private $transactionBundle;

    /**
     * 各エントリに日付を設定してtransactionBundleに格納する
     *
     * @param Entry[] $entries
     */
    public function postEntries(array $entries)
    {
        foreach ($entries as $entry) {
            $entry->postDate();
        }
        $this->transactionBundle[] = $entries;
    }
}


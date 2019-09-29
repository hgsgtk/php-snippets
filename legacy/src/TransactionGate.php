<?php declare(strict_types=1);

namespace legacy;

final class TransactionGate
{
    private $transactionBundle;

    /**
     * 各エントリに日付を設定してtransactionBundleに格納する
     * 重複エントリチェックを追加した
     *
     * @param Entry[] $entries
     */
    public function postEntries(array $entries)
    {
        foreach ($entries as $entry) {
            if (!in_array($entry, $this->transactionBundle, true)) {
                $entry->postDate();
            }
        }
        $this->transactionBundle[] = $entries;
    }
}

